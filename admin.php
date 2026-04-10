<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 0);
ini_set('log_errors', 1);
include("dbcalls/conn.php");
include("dbcalls/menukaart/read.php");
include("dbcalls/contact/read.php");
include("dbcalls/reservations/read.php");



if ($_SESSION['role'] != "admin"){
header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Kumo Sushi</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .div-table {
            display: grid;
            width: 100%;
            border-collapse: collapse;
        }

        .div-table-head {
            display: contents;
            font-weight: bold;
        }

        .div-table-body {
            display: contents;
        }

        .div-table-row {
            display: contents;
        }

        .div-table-row>div,
        .div-table-head>div {
            padding: 8px 12px;
            border-bottom: 1px solid #ddd;
            display: flex;
            align-items: center;
        }

        .div-table-head>div {
            background: #f4f4f4;
            font-weight: bold;
        }
    </style>
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
            <!-- RESERVERINGEN -->
            <h2>Reserveringen</h2>

            <div class="div-table admin-table" style="grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr;">
                <div class="div-table-head">
                    <div>Naam</div>
                    <div>Email</div>
                    <div>Datum</div>
                    <div>Tijd</div>
                    <div>Personen</div>
                    <div>Actie</div>
                </div>
                <div class="div-table-body">
                    <?php foreach ($reservations as $reservation) { ?>
                        <div class="div-table-row">
                            <div><?php echo $reservation['reservationname'] ?></div>
                            <div><?php echo $reservation['reservationemail'] ?></div>
                            <div><?php echo $reservation['reservationdate'] ?></div>
                            <div><?php echo $reservation['reservationtime'] ?></div>
                            <div><?php echo $reservation['reservationamount'] ?></div>
                            <div>
                                <button type="button" class="edit" onclick="fillReservationForm(
                                    '<?php echo $reservation['reservationid'] ?>',
                                    '<?php echo $reservation['reservationname'] ?>',
                                    '<?php echo $reservation['reservationemail'] ?>',
                                    '<?php echo $reservation['reservationdate'] ?>',
                                    '<?php echo $reservation['reservationtime'] ?>',
                                    '<?php echo $reservation['reservationamount'] ?>'
                                )">Bewerken</button>
                                <form action="dbcalls/reservations/delete.php" method="post" style="display:inline;">
                                    <input type="hidden" name="reservationid" value="<?php echo $reservation['reservationid'] ?>">
                                    <button type="submit" class="delete">Verwijderen</button>
                                </form>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <!-- RESERVATION UPDATE FORM -->
            <div style="margin-top: 16px;">
                <form action="dbcalls/reservations/update.php" method="post" class="menu-form">
                    <input type="hidden" name="reservationid" id="update_reservation_id">
                    <input type="text"   name="reservationname"    id="update_name"    placeholder="Naam">
                    <input type="email"  name="reservationemail"   id="update_email"   placeholder="Email">
                    <input type="date"   name="reservationdate"    id="update_date">
                    <input type="time"   name="reservationtime"    id="update_time">
                    <input type="number" name="reservationamount" id="update_persons" placeholder="Personen">
                    <button type="submit" class="edit">Update</button>
                </form>
            </div>

            <!-- CONTACT BERICHTEN -->
            <h2>Contact Berichten</h2>

            <div class="div-table admin-table" style="grid-template-columns: 1fr 1fr 2fr 1fr;">
                <div class="div-table-head">
                    <div>Naam</div>
                    <div>Email</div>
                    <div>Bericht</div>
                    <div>Actie</div>
                </div>
                <div class="div-table-body">
                    <?php foreach ($contacts as $contact) { ?>
                        <div class="div-table-row">
                            <div><?php echo $contact['contactname'] ?></div>
                            <div><?php echo $contact['contactemail'] ?></div>
                            <div><?php echo $contact['contactmessage'] ?></div>
                            <div>
                                <form action="dbcalls/contact/delete.php" method="post" style="display:inline;">
                                    <input type="hidden" name="contactid" value="<?php echo $contact['contactid'] ?>">
                                    <button type="submit" class="delete">Verwijderen</button>
                                </form>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <!-- MENU BEHEER -->
            <h2>Menu Beheer</h2>

            <div class="div-table admin-table" style="grid-template-columns: 2fr 1fr 1fr; width: 100%;">
                <div class="div-table-head">
                    <div>Naam</div>
                    <div>Prijs</div>
                    <div>Actie</div>
                </div>
                <div class="div-table-body">
                    <?php foreach ($items as $item) { ?>
                        <div class="div-table-row">
                            <div><?php echo $item['itemname'] ?></div>
                            <div>€<?php echo $item['itemprice'] ?></div>
                            <div>
                                <button type="button" class="edit"
                                    onclick="fillUpdateForm('<?php echo $item['itemid'] ?>', '<?php echo $item['itemname'] ?>', '<?php echo $item['itemprice'] ?>', '<?php echo $item['itemingredients'] ?>')">Bewerken</button>
                            </div>
                        </div>
                    <?php } ?>

                    <div class="div-table-row">
                        <div style="grid-column: 1 / -1;">
                            <form action="dbcalls/menukaart/update.php" method="post" enctype="multipart/form-data" class="menu-form">
                                <input type="hidden" name="item_id" id="update_item_id">
                                <input type="file" name="itemimage">
                                <input type="text" name="itemname" id="update_itemname" placeholder="Menu Naam">
                                <input type="text" name="itemprice" id="update_itemprice" placeholder="Menu Prijs">
                                <textarea name="itemingredients" id="update_itemingredients" placeholder="Menu Ingrediënten"></textarea>
                                <button type="submit" class="edit">Update</button>
                                <button type="submit" formaction="dbcalls/menukaart/delete.php" class="delete">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- NIEUW MENU ITEM -->
            <h3>Nieuw Menu Item Toevoegen</h3>
            <form action="dbcalls/menukaart/create.php" method="post" enctype="multipart/form-data" class="menu-form">
                <div>
                    <label for="itemimage">Menu Image:</label>
                    <input type="file" name="itemimage" id="itemimage">
                </div>
                <div>
                    <label for="itemname">Menu Naam:</label>
                    <input type="text" name="itemname" id="itemname">
                </div>
                <div>
                    <label for="itemprice">Menu Prijs:</label>
                    <input type="text" name="itemprice" id="itemprice">
                </div>
                <div>
                    <label for="itemingredients">Menu Ingrediënten:</label>
                    <textarea name="itemingredients" id="itemingredients"></textarea>
                </div>
                <div>
                    <button type="submit" class="accept">+ Nieuw Item Toevoegen</button>
                </div>
            </form>

        </main>
    </div>

    <script>
        function fillUpdateForm(id, name, price, ingredients) {
            document.getElementById('update_item_id').value = id;
            document.getElementById('update_itemname').value = name;
            document.getElementById('update_itemprice').value = price;
            document.getElementById('update_itemingredients').value = ingredients;

            document.getElementById('update_itemname').scrollIntoView({ behavior: 'smooth' });
        }

        function fillReservationForm(id, name, email, date, time, persons) {
            document.getElementById('update_reservation_id').value = id;
            document.getElementById('update_name').value = name;
            document.getElementById('update_email').value = email;
            document.getElementById('update_date').value = date;
            document.getElementById('update_time').value = time;
            document.getElementById('update_persons').value = persons;

            document.getElementById('update_name').scrollIntoView({ behavior: 'smooth' });
        }
    </script>

</body>

</html>