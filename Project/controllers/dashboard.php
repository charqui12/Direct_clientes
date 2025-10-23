<?php
class DashboardController {
    public function index() {
        session_start();
        if (!isset($_SESSION['admin_id'])) {
            header("Location: index.php");
            exit;
        }
        require __DIR__ . '/../views/dashboard.php';
    }
}
