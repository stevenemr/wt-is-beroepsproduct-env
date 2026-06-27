<?php
require_once __DIR__ . '/config/init.php';
require_once __DIR__ . '/models/User.php';

$userModel = new User($pdo);

// If user is logged in already, send it to the correct page
if ($userModel->isLoggedIn()) {
    if ($userModel->hasRole('Personnel')) {
        // Employees of the pizzeria    
        header('location: /staff-orders.php');
        exit;
    } else {
        // Normal users
        header('location: /profile.php');
        exit;
    }
}

$loginError = isset($_GET['login_error']) && $_GET['login_error'] == 1;
$registerError = isset($_GET['register_error']) && $_GET['register_error'] == 1;

$pageTitle = 'Inloggen of registreren | Pizzeria Sole Machina 🍕';
require __DIR__ . '/components/head.php';
?>

<?php require __DIR__ . '/components/navbar.php'; ?>

<main>
    <section class="container">
        <h1>Account</h1>

        <div class="auth-grid">
            <form class="auth-form" action="/actions/user-register.php" method="POST">
                <h2>Registreren</h2>

                <p>
                    Nog geen account? Vul het formulier in om een account aan te maken en je bestellingen sneller te
                    plaatsen.
                </p>

                <label for="register-firstname">Voornaam</label>
                <input type="text" id="register-firstname" name="firstname" required>

                <label for="register-lastname">Achternaam</label>
                <input type="text" id="register-lastname" name="lastname" required>

                <label for="register-username">Gebruikersnaam</label>
                <input type="text" id="register-username" name="username" required>

                <label for="register-password">Wachtwoord</label>
                <input type="password" id="register-password" name="password" required>

                <?php if ($registerError): ?>
                    <p>Deze gebruikersnaam bestaat al. Kies een andere gebruikersnaam.</p>
                <?php endif; ?>

                <button type="submit" class="btn btn-primary">Account aanmaken</button>
            </form>

            <form class="auth-form" action="/actions/user-login.php" method="POST">
                <h2>Inloggen</h2>

                <p>
                    Heb je al een account? Hier kan je inloggen.
                </p>

                <label for="login-username">Username</label>
                <input type="text" id="username" name="username" required>

                <label for="login-password">Wachtwoord</label>
                <input type="password" id="login-password" name="password" required>

                <?php if ($loginError): ?>
                    <p>Dit account bestaat niet of het wachtwoord is onjuist.</p>
                <?php endif; ?>

                <button type="submit" class="btn btn-primary">Inloggen</button>
            </form>
        </div>
    </section>
</main>

<?php require __DIR__ . '/components/footer.php'; ?>

<?php require __DIR__ . '/components/foot.php'; ?>