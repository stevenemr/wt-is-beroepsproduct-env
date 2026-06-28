<?php
require_once __DIR__ . '/../config/init.php';
require_once __DIR__ . '/../models/PizzaOrder.php';
require_once __DIR__ . '/../models/User.php';

$userModel = new User($pdo);

if (!$userModel->isLoggedIn() || !$userModel->hasRole('Personnel')) {
    header('location: /register-login.php');
    exit;
}

$orderId = (int) $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['order_status']) && $orderId) {
    $pizzaOrderModel = new PizzaOrder($pdo);

    $orderStatus = (int) $_POST['order_status'];

    if (!$pizzaOrderModel->changeStatus($orderId, $orderStatus)) {
        header('location: /order-detail.php?error=1');
        exit;
    }
}

header('location: /order-detail.php?id=' . $orderId);
exit;
