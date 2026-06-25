<!-- Header -->
<header>
    <!-- CSS helper to check if hamburgermenu is open -->
    <input type="checkbox" id="hamburger-menu">

    <a href="/">
        <img src="/images/logo.png" class="header-logo" alt="Pizzeria Sole Machina logo">
    </a>

    <!-- Desktop nav -->
    <nav aria-label="Desktop navigation">
        <ul>
            <li class="hide-on-mobile"><a href="/">Home</a></li>
            <li class="hide-on-mobile"><a href="/menu.php">Menu</a></li>
            <li class="hide-on-mobile"><a href="/privacy.php">Privacy</a></li>
            <li>
                <a href="/register-login.php">
                    <img src="/images/icons/profile.svg" class="nav-icon" alt="Profile icon">
                </a>
            </li>
            <li class="hide-on-mobile">
                <a href="/cart.php">
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

    <!-- Mobile nav -->
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
            <li><a href="/menu.php">Menu</a></li>
            <li><a href="/privacy.php">Privacy</a></li>
        </ul>
    </nav>
</header>