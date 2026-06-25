<?php
$pageTitle = 'Home | Pizzeria Sole Machina 🍕';
require __DIR__ . '/components/head.php';
?>

<?php require __DIR__ . '/components/navbar.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="hero">
        <video src="/videos/hero.mp4" autoplay muted loop></video>
        <h2>Pizzeria Sole Machina</h2>
    </section>

    <!-- Welcome section -->
    <section class="container">
        <h1>Welkom bij onze pizzeria!</h1>

        <p>
            Bij Pizzeria Sole Machina bestel je verse pizza's, drankjes en Italiaanse klassiekers voor thuis.
            Kies je favorieten uit het menu, vul je afleveradres in en volg daarna eenvoudig de status van je
            bestelling.
        </p>

        <div class="btn-group">
            <a href="/menu.php" class="btn btn-primary">Bekijk ons menu</a>
            <a href="/register-login.php" class="btn btn-secondary">Inloggen / registreren</a>
        </div>
    </section>
</main>

<?php require __DIR__ . '/components/footer.php'; ?>

<?php require __DIR__ . '/components/foot.php'; ?>