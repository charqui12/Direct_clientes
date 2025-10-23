<?php
$controllerName = $_GET['controller'] ?? 'login';
$action = $_GET['action'] ?? 'index';

switch ($controllerName) {
    case 'dashboard':
        require_once __DIR__ . '/controllers/dashboard.php';
        $controller = new DashboardController();
        break;
    default:
        require_once __DIR__ . '/controllers/login.php';
        $controller = new LoginController();
        break;
}

// Ejecutamos la acción
$controller->$action();
