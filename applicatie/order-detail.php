<?php
$pageTitle = 'Bestelling #1042 | Pizzeria Sole Machina 🍕';
require __DIR__ . '/components/head.php';
?>

<?php require __DIR__ . '/components/navbar.php'; ?>

<main>
    <section class="container">
        <div class="title-button-row">
            <h1>Bestelling #1042</h1>
            <a href="/staff-orders.php" class="btn btn-secondary">Terug naar overzicht</a>
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

                <form class="status-form" action="/staff-orders.php" method="get">
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

<?php require __DIR__ . '/components/footer.php'; ?>

<?php require __DIR__ . '/components/foot.php'; ?>