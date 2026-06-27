<?php
require_once __DIR__ . '/config/init.php';
require_once __DIR__ . '/models/User.php';
require_once __DIR__ . '/models/PizzaOrder.php';

$userModel = new User($pdo);

if (!$userModel->isLoggedIn() || !$userModel->hasRole('Personnel')) {
    header('location: /register-login.php');
    exit;
}

$orderModel = new PizzaOrder($pdo);
$orders = $orderModel->getTodaysOrders();

$statusLabels = [
    1 => 'In de oven',
    2 => 'Onderweg',
    3 => 'Bezorgd'
];

$pageTitle = 'Bestellingsoverzicht medewerkers | Pizzeria Sole Machina 🍕';
require __DIR__ . '/components/head.php';
?>

<?php require __DIR__ . '/components/navbar.php'; ?>

<main>
    <section class="container">
        <div class="title-button-row">
            <h1>Bestellingen van vandaag</h1>

            <a href="/actions/user-logout.php" class="btn btn-secondary">
                Uitloggen
            </a>
        </div>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Bestelnummer</th>
                        <th>Tijd</th>
                        <th>Klant</th>
                        <th>Afleveradres</th>
                        <th>Bestelling</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($orders as $order): ?>
                        <tr>
                            <td><a href="/order-detail.php?id=<?= $order['order_id'] ?>">#<?= $order['order_id'] ?></a></td>
                            <td><?= date('H:i', strtotime($order['datetime'])) ?></td>
                            <td><?= $order['client_name'] ?></td>
                            <td><?= $order['address'] ?></td>
                            <td>
                                <?php
                                $items = [];
                                foreach ($order['products'] as $product) {
                                    $items[] = $product['quantity'] . 'x ' . $product['product_name'];
                                }
                                echo implode(', ', $items);
                                ?>
                            </td>
                            <td><?= $statusLabels[$order['status']] ?? 'Onbekend' ?></td>
                        </tr>
                    <?php endforeach; ?>

                    <?php if (empty($orders)): ?>
                        <tr>
                            <td colspan="6">Geen bestellingen vandaag.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </section>
</main>

<?php require __DIR__ . '/components/footer.php'; ?>

<?php require __DIR__ . '/components/foot.php'; ?>