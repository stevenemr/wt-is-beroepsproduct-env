<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inloggen of registreren | Pizzeria Sole Machina 🍕</title>

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
            <h1>Account</h1>

            <div class="auth-grid">
                <form class="auth-form" action="/profile.html" method="get">
                    <h2>Registreren</h2>

                    <p>
                        Nog geen account? Vul het formulier in om een account aan te maken en je bestellingen sneller te
                        plaatsen.
                    </p>

                    <label for="register-name">Naam</label>
                    <input type="text" id="register-name" name="name" autocomplete="name" required>

                    <label for="register-email">E-mailadres</label>
                    <input type="email" id="register-email" name="email" autocomplete="email" required>

                    <label for="register-password">Wachtwoord</label>
                    <input type="password" id="register-password" name="password" autocomplete="new-password" required>

                    <button type="submit" class="btn btn-primary">Account aanmaken</button>
                </form>

                <form class="auth-form" action="/profile.html" method="get">
                    <h2>Inloggen</h2>

                    <p>
                        Heb je al een account? Hier kan je inloggen.
                    </p>

                    <label for="login-email">E-mailadres</label>
                    <input type="email" id="login-email" name="email" autocomplete="email" required>

                    <label for="login-password">Wachtwoord</label>
                    <input type="password" id="login-password" name="password" autocomplete="current-password" required>

                    <button type="submit" class="btn btn-primary">Inloggen</button>
                </form>
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