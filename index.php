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
    <title>Kumo Sushi Nijmegen</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <nav>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#menu">Menu</a></li>
            <li><a href="#reservation">Reserveren</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <a href="loginpage.php" class="login-btn">Inloggen</a>
    </nav>

    <section class="hero" id="home">
        <h1>Welkom bij Kumo Sushi</h1>
        <p>Authentieke Japanse sushi in het hart van Nijmegen</p>
        <a href="#menu" class="btn">Bekijk Menu</a>
    </section>

    <section class="section" id="menu">
        <h2>Ons Menu</h2>
        <div class="card-container">
            <?php
            foreach ($items as $item) {
                ?>
                <div class="menu-card">
                    <img src="/assets/images/<?php echo $item['itemimage']?>" alt="food images">
                    <h3><?php echo $item['itemname']?></h3>
                    <p><?php echo $item['itemingredients']?></p>
                    <span>€<?php echo $item['itemprice']?></span>
                </div>
                <?php
            }
            ?>
        </div>
    </section>

    <section id="reservation">
        <h2>Reserveer een tafel</h2>
        <form action="dbcalls/reservations/create.php" method="post">
            <input type="text" name="reservationname" placeholder="Naam" required>
            <input type="email" name="reservationemail" placeholder="E-mail" required>
            <input type="date" name="reservationdate" min="2023-01-01" max="3000-12-31" required>
            <input type="time" name="reservationtime" required>
            <select name="reservationamount" required>
                <option>Aantal personen</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4+</option>
            </select>
            <button type="submit">Reserveren</button>
        </form>
    </section>

    <section id="contact">
        <h2>Neem Contact Met Ons Op</h2>
        <div class="contact-wrapper">
            <div class="contact-info">
                <h3>Contactinformatie</h3>
                <p><strong>Adres:</strong> Molenstraat 12, Nijmegen</p>
                <p><strong>Telefoon:</strong> 024 - 123 4567</p>
                <p><strong>Email:</strong> info@kumosushi.nl</p>
                <p style="margin-top:20px;"><strong>Openingstijden:</strong><br>Ma - Do: 16:00 - 22:00<br>Vr - Zo: 15:00
                    - 23:00</p>
            </div>
            <div class="contact-form">
                <h3>Stuur Ons Een Bericht</h3>
                <form action="dbcalls/contact/create.php" method="post">
                    <input type="text" name="contactname" placeholder="Naam" required>
                    <input type="email" name="contactemail" placeholder="E-mail" required>
                    <textarea rows="5" name="contactmessage" placeholder="Uw bericht" required></textarea>
                    <button type="submit">Verstuur bericht</button>
                </form>
            </div>
        </div>
        <div class="contact-image">
            <img src="assets/images/contact-image.png" alt="Restaurant sfeer">
        </div>
    </section>


    <footer>© 2026 Kumo Sushi Nijmegen</footer>

</body>

</html>