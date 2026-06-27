<?php
require_once __DIR__ . '/../config/init.php';
require_once __DIR__ . '/../models/User.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userModel = new User($pdo);
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Try to login the user
    if ($userModel->login($username, $password)) {
        if ($userModel->hasRole('Personnel')) {
            // Employees of the pizzeria    
            header('location: /staff-orders.php');
            exit;
        } else {
            // Normal users
            header('location: /profile.php');
            exit;
        }
    }
}

header('location: /register-login.php?login_error=1');
exit;
