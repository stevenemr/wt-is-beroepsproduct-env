<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profiel | Pizzeria Sole Machina 🍕</title>

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
            <h1>Profiel</h1>

            <div class="dashboard-grid">
                <article class="dashboard-panel">

                    <div class="profile-card">
                        <div class="user-profile-picture user-profile-picture-lg">
                            <span>S</span>
                        </div>

                        <div>
                            <h2>Steven Roest</h2>
                            <p>Bakkerstraat 81, <br> 6811 EJ Arnhem</p>
                        </div>
                    </div>

                </article>

                <article class="dashboard-panel">
                    <h2>Jouw bestellingen (4)</h2>

                    <div class="table-container">
                        <table>
                            <thead>
                                <tr>
                                    <th>Bestelnummer</th>
                                    <th>Datum</th>
                                    <th>Tijd</th>
                                    <th>Besteld</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#1042</td>
                                    <td>18 jun 2026</td>
                                    <td>18:00</td>
                                    <td>
                                        <ul>
                                            <li>Pizza Margeritha (2x)</li>
                                            <li>Coca Cola (1x)</li>
                                            <li>Fanta Sinaasappel (1x)</li>
                                        </ul>
                                    </td>
                                    <td>In de oven</td>
                                </tr>
                                <tr>
                                    <td>#1038</td>
                                    <td>24 jan 2026</td>
                                    <td>19:15</td>
                                    <td>
                                        <ul>
                                            <li>Pizza Diavola (1x)</li>
                                            <li>Spa Blauw / Rood (2x)</li>
                                        </ul>
                                    </td>
                                    <td>Bezorgd</td>
                                </tr>
                                <tr>
                                    <td>#1031</td>
                                    <td>12 jan 2026</td>
                                    <td>17:45</td>
                                    <td>
                                        <ul>
                                            <li>Pizza Prosciutto e Funghi (1x)</li>
                                            <li>Fanta Sinaasappel (2x)</li>
                                        </ul>
                                    </td>
                                    <td>Bezorgd</td>
                                </tr>
                                <tr>
                                    <td>#1024</td>
                                    <td>5 jan 2026</td>
                                    <td>20:30</td>
                                    <td>
                                        <ul>
                                            <li>Pizza Quattro Stagioni (1x)</li>
                                            <li>Coca Cola (1x)</li>
                                        </ul>
                                    </td>
                                    <td>Bezorgd</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </article>
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