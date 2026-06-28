<?php
require_once __DIR__ . '/config/init.php';
require_once __DIR__ . '/models/User.php';
require_once __DIR__ . '/models/PizzaOrder.php';
require_once __DIR__ . '/models/Menu.php';
require_once __DIR__ . '/models/Cart.php';


$userModel = new User($pdo);
$pizzaOrderModel = new PizzaOrder($pdo);

if (!$userModel->isLoggedIn() || !$userModel->hasRole('Personnel')) {
    header('location: /register-login.php');
    exit;
}

if (!isset($_GET['id'])) {
    header('location: staff-orders.php');
    exit;
}

$orderId = $_GET['id'];
$order = $pizzaOrderModel->getById($orderId);

// If order doesn't exist, go to staff orders page
if (!$order) {
    header('location: staff-orders.php');
    exit;
}

$menuModel = new Menu($pdo);
$productPrices = [];
foreach ($menuModel->all() as $product) {
    if (!isset($productPrices[$product['name']])) {
        $productPrices[$product['name']] = $product['price'];
    }
}

// Calculate price of order
$subtotal = 0;
foreach ($order['products'] as $product) {
    $price = $productPrices[$product['product_name']] ?? 0;
    $subtotal += $price * $product['quantity'];
}

$statusLabels = [
    1 => 'In de oven',
    2 => 'Onderweg',
    3 => 'Bezorgd'
];

$pageTitle = 'Bestelling #' . $orderId . ' | Pizzeria Sole Machina 🍕';
require __DIR__ . '/components/head.php';
?>

<?php require __DIR__ . '/components/navbar.php'; ?>

<main>
    <section class="container">
        <div class="title-button-row">
            <h1>Bestelling #<?= $orderId ?></h1>
            <a href="/staff-orders.php" class="btn btn-secondary">Terug naar overzicht</a>
        </div>

        <div class="order-detail-grid">
            <article class="dashboard-panel">
                <h2>Klantgegevens</h2>

                <table>
                    <tbody>
                        <tr>
                            <th>Naam</th>
                            <td><?= htmlspecialchars($order['client_name']) ?></td>
                        </tr>
                        <tr>
                            <th>Afleveradres</th>
                            <td><?= htmlspecialchars($order['address']) ?></td>
                        </tr>
                        <tr>
                            <th>Besteltijd</th>
                            <td><?= date('H:i', strtotime($order['datetime'])) ?></td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td><?= $statusLabels[$order['status']] ?? 'Onbekend' ?></td>
                        </tr>
                    </tbody>
                </table>
            </article>

            <article class="dashboard-panel">
                <h2>Status aanpassen</h2>

                <form class="status-form" action="/actions/order-change-status.php?id=<?= $orderId ?>" method="POST">
                    <label for="order_status">Nieuwe status</label>
                    <select id="order_status" name="order_status">
                        <?php foreach ($statusLabels as $key => $label): ?>
                            <option value="<?= $key ?>" <?= $order['status'] == $key ? 'selected' : null ?>><?= $label ?></option>
                        <?php endforeach; ?>
                    </select>

                    <button type="submit" class="btn btn-primary">Status opslaan</button>
                </form>
            </article>
        </div>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Aantal</th>
                        <th>Prijs p/s</th>
                        <th>Totaal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($order['products'] as $product): ?>
                        <?php $price = $productPrices[$product['product_name']] ?? 0; ?>
                        <tr>
                            <td><?= htmlspecialchars($product['product_name']) ?></td>
                            <td><?= $product['quantity'] ?></td>
                            <td>&euro;<?= number_format($price, 2, ',') ?></td>
                            <td>&euro;<?= number_format($price * $product['quantity'], 2, ',') ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <table class="cart-total-table">
            <tbody>
                <tr>
                    <th>Subtotaal:</th>
                    <td>&euro;<?= number_format($subtotal, 2, ',') ?></td>
                </tr>
                <tr>
                    <th>Bezorgkosten:</th>
                    <td>&euro;<?= number_format(DELIVERY_COSTS, 2, ',') ?></td>
                </tr>
                <tr>
                    <th>Totaal:</th>
                    <td>&euro;<?= number_format($subtotal + DELIVERY_COSTS, 2, ',') ?></td>
                </tr>
            </tbody>
        </table>
    </section>
</main>

<?php require __DIR__ . '/components/footer.php'; ?>

<?php require __DIR__ . '/components/foot.php'; ?>