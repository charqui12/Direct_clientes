<?php
require_once __DIR__ . '/../model/admi.php';
require_once __DIR__ . '/../config/conexion.php';

class LoginController {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function index() {
        require __DIR__ . '/../views/vista.php';
    }

    public function login() {
        session_start();
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $adminModel = new Admin($this->conn);
            $result = $adminModel->login($username, $password);

            if ($result) {
                $_SESSION['admin_id'] = $result['id'];
                $_SESSION['username'] = $result['username'];
              header("Location: dashboard.php");


                exit;
            } else {
                $error = "Usuario o contraseña incorrectos";
                require __DIR__ . '/../views/vista.php';
            }
        }
    }
}
