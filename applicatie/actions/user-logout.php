<?php
require_once __DIR__ . '/../config/init.php';
require_once __DIR__ . '/../models/User.php';

$userModel = new User($pdo);

if ($userModel->isLoggedIn()) {
    $userModel->logout();
}

header('location: /');
exit;
