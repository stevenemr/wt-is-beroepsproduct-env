<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Winkelwagentje | Pizzeria Sole Machina 🍕</title>

    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="/images/favicon.ico">
</head>

<body>
    <!-- Header -->
    <header>
        <input type="checkbox" id="hamburger-menu">

        <a href="/">
            <img src="/images/logo.png" class="header-logo" alt="Pizzeria Sole Machina logo">
        </a>

        <nav aria-label="Desktop navigation">
            <ul>
                <li class="hide-on-mobile"><a href="/">Home</a></li>
                <li class="hide-on-mobile"><a href="/menu.html">Menu</a></li>
                <li class="hide-on-mobile"><a href="/privacy.html">Privacy</a></li>
                <li>
                    <a href="/register-login.html">
                        <img src="/images/icons/profile.svg" class="nav-icon" alt="Profile icon">
                    </a>
                </li>
                <li class="hide-on-mobile">
                    <a href="/cart.html">
                        <img src="/images/icons/cart.svg" class="nav-icon" alt="Cart icon">
                    </a>
                </li>
                <li>
                    <label for="hamburger-menu" class="hamburger-menu-icon">
                        <img src="/images/icons/bars.svg" class="nav-icon" alt="Bars icon">
                    </label>
                </li>
            </ul>
        </nav>

        <nav class="mobile-menu" aria-label="Mobile navigation">
            <!-- Top Bar -->
            <div class="top-bar">
                <h3>Menu</h3>
                <label for="hamburger-menu" class="xmark-icon">
                    <img src="/images/icons/xmark.svg" class="nav-icon" alt="Xmark icon">
                </label>
            </div>

            <!-- Navigation items -->
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/menu.html">Menu</a></li>
                <li><a href="/privacy.html">Privacy</a></li>
            </ul>
        </nav>
    </header>

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


            <form class="checkout-form" id="checkout-form" action="/profile.html" method="get">
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

    <!-- Footer -->
    <footer>
        <div class="footer-top">
            <div class="container">
                <img src="/images/logo.png" alt="Website logo">

                <div class="social-links">
                    <a href="https://www.instagram.com/pizzeriasolemachina" target="_blank">
                        <img src="/images/icons/instagram.svg" alt="Instagram logo">
                    </a>

                    <a href="https://www.facebook.com/pizzeriasolemachina" target="_blank">
                        <img src="/images/icons/facebook.svg" alt="Facebook logo">
                    </a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            🍕 Website gemaakt door Steven Roest | 2163247
        </div>
    </footer>
</body>

</html>