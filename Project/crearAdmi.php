<?php
require_once 'config/conexion.php';

$database = new Database();
$conn = $database->getConnection();

$username = "admin1";
$password = "123456";
$hash = password_hash($password, PASSWORD_DEFAULT);

$query = "INSERT INTO admins (username, passw) VALUES (:username, :password)";
$stmt = $conn->prepare($query);
$stmt->bindParam(':username', $username);
$stmt->bindParam(':password', $hash);

if($stmt->execute()) {
    echo "Usuario creado correctamente";
} else {
    echo "Error al crear el usuario";
}
