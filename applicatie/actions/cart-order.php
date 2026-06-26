<?php
require_once __DIR__ . '/../config/init.php';
require_once __DIR__ . '/../models/Cart.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cartModel = new Cart($pdo);

    $fullName = $_POST['full_name'];
    $street = $_POST['street'];
    $houseNumber = $_POST['house_number'];
    $postalCode = $_POST['postal_code'];
    $city = $_POST['city'];
    $address = $street . ' ' . $houseNumber . ', ' . $postalCode . ' ' . $city;

    // TODO: Add PizzaOrder model to this file
    dd($_POST);
}

header('Location: /cart.php');
exit();
