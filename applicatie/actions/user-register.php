<?php
require_once __DIR__ . '/../config/init.php';
require_once __DIR__ . '/../models/User.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userModel = new User($pdo);
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($userModel->register($firstname, $lastname, $username, $password)) {
        header('location: /profile.php');
        exit;
    }
}

header('location: /register-login.php?register_error=1');
exit;
