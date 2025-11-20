<?php

$controller = $_GET['controller'] ?? 'cliente';
$action = $_GET['action'] ?? 'catalogo';

switch ($controller) {
    case 'cliente':
        require_once "../controllers/ControllerCliente.php";
        $c = new ClienteController();
        break;

    default:
        echo "Controlador no encontrado";
        exit;
}

$c->$action();
