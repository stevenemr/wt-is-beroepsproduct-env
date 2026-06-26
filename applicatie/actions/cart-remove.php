<?php
require_once __DIR__ . '/../config/init.php';
require_once __DIR__ . '/../models/Cart.php';

// Check if a product_name has been given
if (isset($_GET['product_name'])) {
    $productName = (string) $_GET['product_name'];

    $cartModel = new Cart($pdo);
    $cartModel->removeFromCart($productName);
}

header('location: /cart.php');
exit;
