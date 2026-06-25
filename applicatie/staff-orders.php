<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bestellingsoverzicht medewerkers | Pizzeria Sole Machina 🍕</title>

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
            <h1>Bestellingen van vandaag</h1>

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
                        <tr>
                            <td><a href="/order-detail.html">#1042</a></td>
                            <td>17:45</td>
                            <td>Steven Roest</td>
                            <td>Bakkerstraat 81, 6811 EJ Arnhem</td>
                            <td>2x Pizza Margherita, 1x Coca-Cola</td>
                            <td>In de oven</td>
                        </tr>
                        <tr>
                            <td>#1043</td>
                            <td>18:05</td>
                            <td>Sam Jansen</td>
                            <td>Stationsplein 12, 6811KL Arnhem</td>
                            <td>1x Pizza Diavola, 2x Spa Blauw / Rood</td>
                            <td>Onderweg</td>
                        </tr>
                        <tr>
                            <td>#1044</td>
                            <td>18:20</td>
                            <td>Noa Bakker</td>
                            <td>Marktstraat 4, 6511AA Nijmegen</td>
                            <td>1x Pizza Vegetariana, 1x Fanta Sinaasappel</td>
                            <td>In de oven</td>
                        </tr>
                        <tr>
                            <td>#1045</td>
                            <td>18:35</td>
                            <td>Yara de Vries</td>
                            <td>Schoolweg 22, 6828GC Arnhem</td>
                            <td>1x Pizza Quattro Stagioni, 1x Coca-Cola</td>
                            <td>Onderweg</td>
                        </tr>
                    </tbody>
                </table>
            </div>
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
