<?php
require_once __DIR__ . '/config/init.php';
require_once __DIR__ . '/models/Menu.php';

$menuModel = new Menu($pdo);
$menu = $menuModel->getByCategories();

$pageTitle = 'Menu | Pizzeria Sole Machina 🍕';
require __DIR__ . '/components/head.php';
?>

<?php require __DIR__ . '/components/navbar.php'; ?>

<main>

    <?php foreach ($menu as $category => $menuItems): ?>
        <section class="container">
            <h1><?= htmlspecialchars($category) ?></h1>

            <div class="menu-grid">
                <?php foreach ($menuItems as $product): ?>
                    <article class="menu-item">
                        <div class="img-wrapper">
                            <img src="/images/products/<?= toSlug($product['name']) ?>.jpg" alt="Foto van een pizza Margherita">
                            <div class="menu-item-price">€ <?= number_format($product['price'], 2, ',') ?></div>
                        </div>

                        <h2><?= htmlspecialchars($product['name']) ?></h2>

                        <?php if (isset($product['ingredients']) && !empty($product['ingredients'])): ?>
                            <p><?= implode(', ', $product['ingredients']) ?></p>
                        <?php endif; ?>

                        <div class="btn-group">
                            <a href="/cart.php" class="btn btn-primary">Bestellen</a>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>
    <?php endforeach; ?>

    <!-- Floating cart button on mobile-->
    <a href="/cart.php" id="floating-cart-button">
        <img src="/images/icons/cart.svg" alt="Cart">
    </a>
</main>

<?php require __DIR__ . '/components/footer.php'; ?>

<?php require __DIR__ . '/components/foot.php'; ?>