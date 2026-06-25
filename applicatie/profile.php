<?php
$pageTitle = 'Profiel | Pizzeria Sole Machina 🍕';
require __DIR__ . '/components/head.php';
?>

<?php require __DIR__ . '/components/navbar.php'; ?>

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

<?php require __DIR__ . '/components/footer.php'; ?>

<?php require __DIR__ . '/components/foot.php'; ?>
