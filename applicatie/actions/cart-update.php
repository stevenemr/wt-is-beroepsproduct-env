<?php
require_once __DIR__ . '/../config/init.php';
require_once __DIR__ . '/../models/Cart.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['quantities'])) {
    $cartModel = new Cart($pdo);

    foreach ($_POST['quantities'] as $productName => $quantity) {
        $cartModel->updateQuantity($productName, (int)$quantity);
    }
}

header('Location: /cart.php');
exit();
