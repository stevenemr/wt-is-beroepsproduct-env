<?php
require_once __DIR__ . '/../config/init.php';
require_once __DIR__ . '/../models/PizzaOrder.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['order_status'])) {
    $pizzaOrderModel = new PizzaOrder($pdo);

    $orderId = (int) $_GET['id'];
    $orderStatus = (int) $_POST['order_status'];

    if (!$pizzaOrderModel->changeStatus($orderId, $orderStatus)) {
        header('location: /order-detail.php?error=1');
        exit;
    }
}

header('location: /order-detail.php?id=' . $orderId);
exit;
