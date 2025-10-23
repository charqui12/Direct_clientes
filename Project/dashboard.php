<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Directorio de Clientes</title>
    <link rel="stylesheet" href="assets/css/estilos.css">
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f4f6f8;
            color: #333;
        }

        header {
            background: #2575fc;
            color: #fff;
            padding: 20px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .container {
            max-width: 1200px;
            margin: 30px auto;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .card {
            background: #fff;
            flex: 1 1 250px;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            transition: transform 0.2s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card h2 {
            margin: 0 0 15px;
            font-size: 20px;
            color: #2575fc;
        }

        .card p {
            font-size: 16px;
        }

        .logout-btn {
            display: inline-block;
            margin: 30px auto 0;
            padding: 10px 25px;
            background-color: #ff4b5c;
            color: #fff;
            border-radius: 10px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .logout-btn:hover {
            background-color: #ff1e2d;
        }

        .welcome {
            text-align: center;
            margin: 20px 0;
            font-size: 22px;
        }
    </style>
</head>
<body>
    <header>Directorio de Clientes - Dashboard</header>
    <div class="welcome">Bienvenido, <?php echo $_SESSION['username']; ?>!</div>

    <div class="container">
        <div class="card">
            <h2>Clientes</h2>
            <p>Gestiona los clientes registrados en tu sistema.</p>
        </div>
        <div class="card">
            <h2>Usuarios</h2>
            <p>Administra los usuarios y permisos de acceso.</p>
        </div>
        <div class="card">
            <h2>Pedidos</h2>
            <p>Visualiza y controla los pedidos realizados.</p>
        </div>
        <div class="card">
            <h2>Configuración</h2>
            <p>Ajusta los parámetros del sistema.</p>
        </div>
    </div>

    <div style="text-align:center;">
        <a class="logout-btn" href="logout.php">Cerrar sesión</a>
    </div>
</body>
</html>
