<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Dashboard - Kumo Sushi</title>
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/admin.css">
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
                <!-- reservations here -->
            </tbody>

        </table>


        <h2>Contact Berichten</h2>

        <div class="messages">
            <!-- messages here -->
        </div>


        <h2>Menu Beheer</h2>

        <table class="admin-table">

            <thead>
                <tr>
                    <th>Naam</th>
                    <th>Categorie</th>
                    <th>Prijs</th>
                    <th>Beschikbaar</th>
                    <th>Actie</th>
                </tr>
            </thead>

            <tbody>
                <!-- menu items here -->
            </tbody>

        </table>

        <button class="accept">+ Nieuw Item Toevoegen</button>

    </main>

</div>

</body>
</html>