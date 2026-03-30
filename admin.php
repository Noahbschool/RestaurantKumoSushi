<?php
error_reporting(E_ALL);
ini_set('display_errors', 0);
ini_set('log_errors', 1);
include("dbcalls/conn.php");
include("dbcalls/menukaart/read.php");
?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Kumo Sushi</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <header class="admin-header">
        <h1>Kumo Sushi Admin</h1>
        <a href="index.php" class="back-btn">← Terug naar website</a>
    </header>

    <div class="admin-container">

        <!-- SIDEBAR -->
        <aside class="admin-sidebar">
            <ul>
                <li class="active">Dashboard</li>
                <li>Reserveringen</li>
                <li>Contact Berichten</li>
                <li>Menu Beheer</li>
            </ul>
        </aside>

        <!-- MAIN CONTENT -->
        <main class="admin-main">

            <h2>Dashboard Overzicht</h2>

            <div class="stats">
                <div class="stat-card">
                    <h3>Nieuwe Reserveringen</h3>
                    <p></p>
                </div>
                <div class="stat-card">
                    <h3>Nieuwe Berichten</h3>
                    <p></p>
                </div>
                <div class="stat-card">
                    <h3>Totaal Bestellingen</h3>
                    <p></p>
                </div>
            </div>

            <h2>Reserveringen</h2>

            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Naam</th>
                        <th>Email</th>
                        <th>Datum</th>
                        <th>Tijd</th>
                        <th>Personen</th>
                        <th>Actie</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <button class="edit">Update</button>
                            <button class="delete">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>

            <h2>Contact Berichten</h2>

            <div class="messages">
                <div class="message">
                    <button class="delete">Delete</button>
                </div>
            </div>

            <h2>Menu Beheer</h2>

            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Naam</th>
                        <th>Prijs</th>
                        <th>Actie</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($items as $item): ?>
                    <tr>
                        <td><?= htmlspecialchars($item['itemname']) ?></td>
                        <td>€<?= htmlspecialchars($item['itemprice']) ?></td>
                        <td><?php
                            $id          = htmlspecialchars($item['id'] ?? $item['itemid'] ?? '', ENT_QUOTES);
                            $name        = htmlspecialchars($item['itemname'] ?? '', ENT_QUOTES);
                            $price       = htmlspecialchars($item['itemprice'] ?? '', ENT_QUOTES);
                            $ingredients = htmlspecialchars($item['itemingredients'] ?? '', ENT_QUOTES);
                        ?><button type="button" class="edit" onclick="fillUpdateForm('<?= $id ?>', '<?= $name ?>', '<?= $price ?>', '<?= $ingredients ?>')">Bewerken</button></td>
                    </tr>
                    <?php endforeach; ?>

                    <tr>
                        <td colspan="3">
                            <form action="dbcalls/menukaart/update.php" method="post" enctype="multipart/form-data" class="menu-form">
                                <input type="hidden" name="item_id" id="update_item_id">
                                <input type="file" name="itemimage">
                                <input type="text" name="itemname" id="update_itemname" placeholder="Menu Naam">
                                <input type="text" name="itemprice" id="update_itemprice" placeholder="Menu Prijs">
                                <textarea name="itemingredients" id="update_itemingredients" placeholder="Menu Ingrediënten"></textarea>
                                <button type="submit" class="edit">Update</button>
                                <button type="submit" formaction="dbcalls/menukaart/delete.php" class="delete">Delete</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>

            <h3>Nieuw Menu Item Toevoegen</h3>
            <form action="dbcalls/menukaart/create.php" method="post" enctype="multipart/form-data" class="menu-form">
                <div>
                    <label for="menuimage">Menu Image:</label>
                    <input type="file" name="itemimage" id="itemimage">
                </div>
                <div>
                    <label for="menuname">Menu Naam:</label>
                    <input type="text" name="itemname" id="itemname">
                </div>
                <div>
                    <label for="menuprice">Menu Prijs:</label>
                    <input type="text" name="itemprice" id="itemprice">
                </div>
                <div>
                    <label for="menuingredients">Menu Ingrediënten:</label>
                    <textarea name="itemingredients" id="itemingredients"></textarea>
                </div>
                <div>
                    <button type="submit" class="accept">+ Nieuw Item Toevoegen</button>
                </div>
            </form>
                        <h1 class="i-hate-php">fuck this site</h1>
        </main>

    </div>

    <script>
        function fillUpdateForm(id, name, price, ingredients) {
            document.getElementById('update_item_id').value         = id;
            document.getElementById('update_itemname').value        = name;
            document.getElementById('update_itemprice').value       = price;
            document.getElementById('update_itemingredients').value = ingredients;

            document.getElementById('update_itemname').scrollIntoView({ behavior: 'smooth' });
        }
    </script>

</body>

</html>