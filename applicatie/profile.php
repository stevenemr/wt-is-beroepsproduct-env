<?php
require_once __DIR__ . '/config/init.php';
require_once __DIR__ . '/models/User.php';
require_once __DIR__ . '/models/PizzaOrder.php';

$userModel = new User($pdo);

if (!$userModel->isLoggedIn()) {
    header('location: /register-login.php');
    exit;
}

$user = $userModel->getCurrentUser();

$orderModel = new PizzaOrder($pdo);
$orders = $orderModel->getByUsername($_SESSION['username']);

$statusLabels = [
    1 => 'In de oven',
    2 => 'Onderweg',
    3 => 'Bezorgd'
];

$pageTitle = 'Profiel | Pizzeria Sole Machina 🍕';
require __DIR__ . '/components/head.php';
?>

<?php require __DIR__ . '/components/navbar.php'; ?>

<main>
    <section class="container">
        <div class="title-button-row">
            <h1>Profiel</h1>

            <a href="/actions/user-logout.php" class="btn btn-secondary">
                Uitloggen
            </a>
        </div>

        <div class="dashboard-grid">
            <article class="dashboard-panel">

                <div class="profile-card">
                    <div class="user-profile-picture user-profile-picture-lg">
                        <span><?= substr($user['first_name'], 0, 1) ?></span>
                    </div>

                    <div>
                        <h2><?= $user['first_name'] . ' ' . $user['last_name'] ?></h2>
                    </div>
                </div>

            </article>

            <article class="dashboard-panel">
                <h2>Jouw bestellingen (<?= count($orders) ?>)</h2>

                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Bestelnummer</th>
                                <th>Datum</th>
                                <th>Besteld</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($orders as $order): ?>
                                <tr>
                                    <td>#<?= $order['order_id'] ?></td>
                                    <td><?= date('d-m-Y H:i', strtotime($order['datetime'])) ?></td>
                                    <td>
                                        <ul>
                                            <?php foreach ($order['products'] as $product): ?>
                                                <li><?= $product['product_name'] ?> (<?= $product['quantity'] ?>x)</li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </td>
                                    <td><?= $statusLabels[$order['status']] ?? 'Onbekend' ?></td>
                                </tr>
                            <?php endforeach; ?>

                            <?php if (empty($orders)): ?>
                                <tr>
                                    <td colspan="4">Nog geen bestellingen geplaatst.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>

            </article>
        </div>
    </section>
</main>

<?php require __DIR__ . '/components/footer.php'; ?>

<?php require __DIR__ . '/components/foot.php'; ?>