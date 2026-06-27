<?php
require_once __DIR__ . '/../config/init.php';
require_once __DIR__ . '/../models/Cart.php';
require_once __DIR__ . '/../models/PizzaOrder.php';
require_once __DIR__ . '/../models/User.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cartModel = new Cart($pdo);
    $pizzaOrderModel = new PizzaOrder($pdo);
    $userModel = new User($pdo);

    $fullName = $_POST['full_name'];
    $street = $_POST['street'];
    $houseNumber = $_POST['house_number'];
    $postalCode = $_POST['postal_code'];
    $city = $_POST['city'];
    $address = $street . ' ' . $houseNumber . ', ' . $postalCode . ' ' . $city;
    $order = $cartModel->all();

    $clientUsername = $userModel->isLoggedIn() ? $userModel->getCurrentUser()['username'] : null;

    try {
        $pizzaOrderModel->addOrder($fullName, $address, $order, $clientUsername);

        $cartModel->clear(); // Remove the whole cart of the user
    } catch (Exception $e) {
        header('Location: /cart.php?error=1');
        exit();
    }
}

header('Location: /cart.php?success=1');
exit();
