<?php
$pageTitle = 'Inloggen of registreren | Pizzeria Sole Machina 🍕';
require __DIR__ . '/components/head.php';
?>

<?php require __DIR__ . '/components/navbar.php'; ?>

<main>
    <section class="container">
        <h1>Account</h1>

        <div class="auth-grid">
            <form class="auth-form" action="/profile.php" method="get">
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

            <form class="auth-form" action="/profile.php" method="get">
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

<?php require __DIR__ . '/components/footer.php'; ?>

<?php require __DIR__ . '/components/foot.php'; ?>