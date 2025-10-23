<?php
require_once 'config/conexion.php'; // si tienes archivo de conexión

class Admin {
    private $conn;
    private $table = "admins";

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function login($username, $password) {
        $query = "SELECT * FROM " . $this->table . " WHERE username = :username LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        $admin = $stmt->fetch(PDO::FETCH_ASSOC);

       
        if ($admin && password_verify($password, $admin['passw'])) {
            return $admin;
        }
        return false;
    }
}
