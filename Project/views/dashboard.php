<?php
session_start();

// Si no hay sesión activa, redirige al login
if (!isset($_SESSION['admin_id'])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Directorio</title>
    <link rel="stylesheet" href="assets/css/estilos.css">
    <style>
        /* Estilo simple para el dashboard */
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            height: 100vh;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: #fff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .dashboard-container {
            margin-top: 50px;
            background: rgba(0,0,0,0.3);
            padding: 30px;
            border-radius: 15px;
            text-align: center;
        }
        a.logout-btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #ff4b5c;
            color: #fff;
            border-radius: 10px;
            text-decoration: none;
            transition: 0.3s;
        }
        a.logout-btn:hover {
            background-color: #ff1e2d;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <h1>Bienvenido, <?php echo $_SESSION['username']; ?>!</h1>
        <p>Este es tu panel de administración.</p>
        <a class="logout-btn" href="logout.php">Cerrar sesión</a>
    </div>
</body>
</html>
