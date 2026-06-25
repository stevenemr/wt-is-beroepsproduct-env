<?php
$pageTitle = 'Bestellingsoverzicht medewerkers | Pizzeria Sole Machina 🍕';
require __DIR__ . '/components/head.php';
?>

<?php require __DIR__ . '/components/navbar.php'; ?>

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
                        <td><a href="/order-detail.php">#1042</a></td>
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

<?php require __DIR__ . '/components/footer.php'; ?>

<?php require __DIR__ . '/components/foot.php'; ?>