<?php
$pageTitle = 'Winkelwagentje | Pizzeria Sole Machina 🍕';
require __DIR__ . '/components/head.php';
?>

<?php require __DIR__ . '/components/navbar.php'; ?>

<main>
    <section class="container">

        <div class="title-button-row">
            <h1>Winkelwagentje</h1>

            <a href="#checkout-form" class="btn btn-primary">
                Bestellen &rarr;
            </a>
        </div>


        <div class="cart-container">
            <article class="cart-item">
                <img src="/images/pizzas/margherita.jpg" alt="Foto van een pizza margherita">

                <div>
                    <h2>Pizza Margherita | €10,50 p/s</h2>
                    <p>Een klassieke pizza met tomatensaus, verse mozzarella en basilicum. Simpel maar heerlijk.</p>
                </div>

                <input type="number" name="margherita-quantity" id="margherita-quantity" min="0" value="2">

                <button class="btn btn-secondary btn-icon">
                    <img src="/images/icons/trash.svg" alt="Trash icon">
                    Verwijderen
                </button>
            </article>

            <article class="cart-item">
                <img src="/images/drinks/fanta.webp" alt="Foto van een flesje fanta">

                <div>
                    <h2>Fanta Sinaasappel | €2,75 p/s</h2>
                    <p>Fris en fruitig. Een perfecte combinatie met een pittige pizza. 33cl.</p>
                </div>

                <input type="number" name="fanta-quantity" id="fanta-quantity" min="0" value="1">

                <button class="btn btn-secondary btn-icon">
                    <img src="/images/icons/trash.svg" alt="Trash icon">
                    Verwijderen
                </button>
            </article>

            <article class="cart-item">
                <img src="/images/drinks/spa.webp" alt="Foto van een flesje spa">

                <div>
                    <h2>Spa Blauw / Rood | € 2,25 p/s</h2>
                    <p>Mineraalwater, still of bruisend. Licht en verfrissend bij elke maaltijd. 33cl.</p>
                </div>

                <input type="number" name="spa-quantity" id="spa-quantity" min="0" value="1">

                <button class="btn btn-secondary btn-icon">
                    <img src="/images/icons/trash.svg" alt="Trash icon">
                    Verwijderen
                </button>
            </article>
        </div>

        <table>
            <tbody>
                <tr>
                    <th>Subtotaal:</th>
                    <td>€26,00</td>
                </tr>
                <tr>
                    <th>Bezorgkosten:</th>
                    <td>€4,99</td>
                </tr>
                <tr>
                    <th>Totaal:</th>
                    <td>€30,99</td>
                </tr>
            </tbody>
        </table>


        <form class="checkout-form" id="checkout-form" action="/profile.php" method="get">
            <h2>Aflevergegevens</h2>

            <div class="form-grid">
                <div class="form-field form-field-wide">
                    <label for="full-name">Naam</label>
                    <input type="text" id="full-name" name="full-name" autocomplete="name" required>
                </div>

                <div class="form-field">
                    <label for="street">Straat</label>
                    <input type="text" id="street" name="street" autocomplete="address-line1" required>
                </div>

                <div class="form-field">
                    <label for="house-number">Huisnummer</label>
                    <input type="text" id="house-number" name="house-number" required>
                </div>

                <div class="form-field">
                    <label for="postal-code">Postcode</label>
                    <input type="text" id="postal-code" name="postal-code" autocomplete="postal-code" required>
                </div>

                <div class="form-field">
                    <label for="city">Plaats</label>
                    <input type="text" id="city" name="city" autocomplete="address-level2" required>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Bestelling plaatsen</button>
        </form>

    </section>
</main>

<?php require __DIR__ . '/components/footer.php'; ?>

<?php require __DIR__ . '/components/foot.php'; ?>