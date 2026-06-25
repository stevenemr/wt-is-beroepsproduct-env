<?php
$pageTitle = 'Menu | Pizzeria Sole Machina 🍕';
require __DIR__ . '/components/head.php';
?>

<?php require __DIR__ . '/components/navbar.php'; ?>

<main>
    <!-- Pizza's section -->
    <section class="container">
        <h1>Pizza's</h1>
        <div class="menu-grid">
            <article class="menu-item">
                <div class="img-wrapper">
                    <img src="/images/pizzas/margherita.jpg" alt="Foto van een pizza Margherita">
                    <div class="menu-item-price">€ 10,50</div>
                </div>
                <h2>Pizza Margherita</h2>
                <p>Een klassieke pizza met tomatensaus, verse mozzarella en basilicum. Simpel maar heerlijk.</p>
                <div class="btn-group">
                    <a href="/cart.php" class="btn btn-primary">Bestellen</a>
                </div>
            </article>

            <article class="menu-item">
                <div class="img-wrapper">
                    <img src="/images/pizzas/pepperoni.jpg" alt="Foto van een pizza Pepperoni">
                    <div class="menu-item-price">€ 12,50</div>
                </div>
                <h2>Pizza Pepperoni</h2>
                <p>Rijkelijk belegd met gekruide pepperonisalami en gesmolten mozzarella op een romige tomatensaus.
                </p>
                <div class="btn-group">
                    <a href="/cart.php" class="btn btn-primary">Bestellen</a>
                </div>
            </article>

            <article class="menu-item">
                <div class="img-wrapper">
                    <img src="/images/pizzas/quattro-stagioni.jpg" alt="Foto van een pizza Quattro Stagioni">
                    <div class="menu-item-price">€ 13,00</div>
                </div>
                <h2>Pizza Quattro Stagioni</h2>
                <p>Vier smaken in één: ham, champignons, artisjok en olijven, elk in een eigen kwart verdeeld.</p>
                <div class="btn-group">
                    <a href="/cart.php" class="btn btn-primary">Bestellen</a>
                </div>
            </article>

            <article class="menu-item">
                <div class="img-wrapper">
                    <img src="/images/pizzas/diavola.jpg" alt="Foto van een pizza Diavola">
                    <div class="menu-item-price">€ 13,50</div>
                </div>
                <h2>Pizza Diavola</h2>
                <p>Voor de liefhebber van pittig: pikante salami, jalapeños en een vleugje chili-olie.</p>
                <div class="btn-group">
                    <a href="/cart.php" class="btn btn-primary">Bestellen</a>
                </div>
            </article>

            <article class="menu-item">
                <div class="img-wrapper">
                    <img src="/images/pizzas/pizza-prosciutto-e-funghi.jpg"
                        alt="Foto van een pizza Prosciutto e Funghi">
                    <div class="menu-item-price">€ 12,00</div>
                </div>
                <h2>Pizza Prosciutto e Funghi</h2>
                <p>Een tijdloze combinatie van Italiaanse ham en verse champignons op een dunne krokante bodem.</p>
                <div class="btn-group">
                    <a href="/cart.php" class="btn btn-primary">Bestellen</a>
                </div>
            </article>

            <article class="menu-item">
                <div class="img-wrapper">
                    <img src="/images/pizzas/vegetariana.webp" alt="Foto van een pizza Vegetariana">
                    <div class="menu-item-price">€ 11,50</div>
                </div>
                <h2>Pizza Vegetariana</h2>
                <p>Kleurrijk belegd met gegrilde paprika, courgette, aubergine, rode ui en zongedroogde tomaten.</p>
                <div class="btn-group">
                    <a href="/cart.php" class="btn btn-primary">Bestellen</a>
                </div>
            </article>
        </div>
    </section>

    <!-- Dranken section -->
    <section class="container">
        <h1>Dranken</h1>
        <div class="menu-grid">
            <article class="menu-item">
                <div class="img-wrapper">
                    <img src="/images/drinks/coca-cola.jpg" alt="Foto van een Coca-Cola">
                    <div class="menu-item-price">€ 2,75</div>
                </div>
                <h2>Coca-Cola</h2>
                <p>De klassieker. Koud geserveerd. 33cl.</p>
                <div class="btn-group">
                    <a href="/cart.php" class="btn btn-primary">Bestellen</a>
                </div>
            </article>

            <article class="menu-item">
                <div class="img-wrapper">
                    <img src="/images/drinks/fanta.webp" alt="Foto van een Fanta">
                    <div class="menu-item-price">€ 2,75</div>
                </div>
                <h2>Fanta Sinaasappel</h2>
                <p>Fris en fruitig. Een perfecte combinatie met een pittige pizza. 33cl.</p>
                <div class="btn-group">
                    <a href="/cart.php" class="btn btn-primary">Bestellen</a>
                </div>
            </article>

            <article class="menu-item">
                <div class="img-wrapper">
                    <img src="/images/drinks/spa.webp" alt="Foto van een Spa">
                    <div class="menu-item-price">€ 2,25</div>
                </div>
                <h2>Spa Blauw / Rood</h2>
                <p>Mineraalwater, still of bruisend. Licht en verfrissend bij elke maaltijd. 33cl.</p>
                <div class="btn-group">
                    <a href="/cart.php" class="btn btn-primary">Bestellen</a>
                </div>
            </article>
        </div>
    </section>

    <!-- Floating cart button on mobile-->
    <a href="/cart.php" id="floating-cart-button">
        <img src="/images/icons/cart.svg" alt="Cart">
    </a>
</main>

<?php require __DIR__ . '/components/footer.php'; ?>

<?php require __DIR__ . '/components/foot.php'; ?>