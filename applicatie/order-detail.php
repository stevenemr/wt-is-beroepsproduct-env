<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bestelling #1042 | Pizzeria Sole Machina 🍕</title>

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
                <h1>Bestelling #1042</h1>
                <a href="/staff-orders.html" class="btn btn-secondary">Terug naar overzicht</a>
            </div>

            <div class="order-detail-grid">
                <article class="dashboard-panel">
                    <h2>Klantgegevens</h2>

                    <table>
                        <tbody>
                            <tr>
                                <th>Naam</th>
                                <td>Steven Roest</td>
                            </tr>
                            <tr>
                                <th>Afleveradres</th>
                                <td>Bakkerstraat 81, 6811 EJ Arnhem</td>
                            </tr>
                            <tr>
                                <th>Besteltijd</th>
                                <td>17:45</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>In de oven</td>
                            </tr>
                        </tbody>
                    </table>
                </article>

                <article class="dashboard-panel">
                    <h2>Status aanpassen</h2>

                    <form class="status-form" action="/staff-orders.html" method="get">
                        <label for="order-status">Nieuwe status</label>
                        <select id="order-status" name="order-status">
                            <option value="in-de-oven" selected>In de oven</option>
                            <option value="onderweg">Onderweg</option>
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
                        <tr>
                            <td>Pizza Margherita</td>
                            <td>2</td>
                            <td>€10,50</td>
                            <td>€21,00</td>
                        </tr>
                        <tr>
                            <td>Coca-Cola</td>
                            <td>1</td>
                            <td>€2,75</td>
                            <td>€2,75</td>
                        </tr>
                        <tr>
                            <td>Fanta Sinaasappel</td>
                            <td>1</td>
                            <td>€2,75</td>
                            <td>€2,75</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <table class="cart-total-table">
                <tbody>
                    <tr>
                        <th>Subtotaal:</th>
                        <td>€26,50</td>
                    </tr>
                    <tr>
                        <th>Bezorgkosten:</th>
                        <td>€4,99</td>
                    </tr>
                    <tr>
                        <th>Totaal:</th>
                        <td>€31,49</td>
                    </tr>
                </tbody>
            </table>
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
