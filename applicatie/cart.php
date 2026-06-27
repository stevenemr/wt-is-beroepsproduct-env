<?php
require_once __DIR__ . '/config/init.php';
require_once __DIR__ . '/models/Cart.php';
require_once __DIR__ . '/models/User.php';

$cartModel = new Cart($pdo);
$cart = $cartModel->all();

$userModel = new User($pdo);
$user = $userModel->getCurrentUser();

$success = isset($_GET['success']) && $_GET['success'] == 1;
$error = isset($_GET['error']) && $_GET['error'] == 1;

$pageTitle = 'Winkelwagentje | Pizzeria Sole Machina 🍕';
require __DIR__ . '/components/head.php';
?>

<?php require __DIR__ . '/components/navbar.php'; ?>

<main>
    <section class="container">

        <div class="title-button-row">
            <h1>Winkelwagentje</h1>

            <?php if (!empty($cartModel->all())): ?>
                <a href="#checkout-form" class="btn btn-primary">
                    Bestellen &rarr;
                </a>
            <?php endif; ?>
        </div>

        <?php if ($success): ?>
            <p>
                Bedankt voor je bestelling!
            </p>
        <?php endif; ?>

        <?php if ($error): ?>
            <p>
                Er is een fout opgetreden tijdens het maken van je bestelling. Probeer het later opnieuw.
            </p>
        <?php endif; ?>

        <?php if (!empty($cartModel->all())): ?>
            <form action="/actions/cart-update.php" method="POST">

                <div class="cart-container">
                    <?php foreach ($cart as $product): ?>
                        <article class="cart-item">
                            <img src="/images/products/<?= toSlug($product['name']) ?>.jpg" alt="Foto van een <?= htmlspecialchars($product['name']) ?>">

                            <div>
                                <h2><?= htmlspecialchars($product['name']) ?> | €<?= number_format($product['price'], 2, ',') ?> p/s</h2>
                            </div>

                            <input type="number"
                                name="quantities[<?= htmlspecialchars($product['name']) ?>]"
                                min="0"
                                value="<?= $product['quantity'] ?>">

                            <a href="/actions/cart-remove.php?product_name=<?= urlencode($product['name']) ?>" class="btn btn-secondary btn-icon">
                                <img src="/images/icons/trash.svg" alt="Trash icon">
                                Verwijderen
                            </a>
                        </article>
                    <?php endforeach; ?>
                </div>

                <div style="text-align: right; margin-top: 15px;">
                    <button type="submit" class="btn btn-secondary">Aantallen bijwerken</button>
                </div>

            </form>

            <table>
                <tbody>
                    <tr>
                        <th>Subtotaal:</th>
                        <td>€<?= number_format($cartModel->getSubtotal(), 2, ',', '.') ?></td>
                    </tr>
                    <tr>
                        <th>Bezorgkosten:</th>
                        <td>€<?= number_format(DELIVERY_COSTS, 2, ',', '.') ?></td>
                    </tr>
                    <tr>
                        <th>Totaal:</th>
                        <td><strong>€<?= number_format($cartModel->getTotal(), 2, ',', '.') ?></strong></td>
                    </tr>
                </tbody>
            </table>

            <form class="checkout-form" id="checkout-form" action="/actions/cart-order.php" method="POST">
                <h2>Aflevergegevens</h2>

                <div class="form-grid">
                    <div class="form-field form-field-wide">
                        <label for="full-name">Naam</label>
                        <input type="text" id="full-name" name="full_name" value="<?= $user ? $user['first_name'] . ' ' . $user['last_name'] : '' ?>" required>
                    </div>

                    <div class="form-field">
                        <label for="street">Straat</label>
                        <input type="text" id="street" name="street" required>
                    </div>

                    <div class="form-field">
                        <label for="house-number">Huisnummer</label>
                        <input type="text" id="house-number" name="house_number" required>
                    </div>

                    <div class="form-field">
                        <label for="postal-code">Postcode</label>
                        <input type="text" id="postal-code" name="postal_code" required>
                    </div>

                    <div class="form-field">
                        <label for="city">Plaats</label>
                        <input type="text" id="city" name="city" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Bestelling plaatsen</button>
            </form>
        <?php else: ?>
            <p>Je winkelmagentje is leeg</p>
        <?php endif; ?>
    </section>
</main>

<?php require __DIR__ . '/components/footer.php'; ?>

<?php require __DIR__ . '/components/foot.php'; ?>