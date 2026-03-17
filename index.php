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
    <a href="login.php" class="login-btn">Inloggen</a>
</nav>

<section class="hero" id="home">
    <h1>Welkom bij Kumo Sushi</h1>
    <p>Authentieke Japanse sushi in het hart van Nijmegen</p>
    <a href="#menu" class="btn">Bekijk Menu</a>
</section>

<section class="section" id="menu">
    <h2>Ons Menu</h2>
    <div class="card-container">
        <!-- menu items komen hier via PHP -->
    </div>
</section>

<section id="reservation">
    <h2>Reserveer een tafel</h2>
    <form>
        <input type="text" placeholder="Naam" required>
        <input type="email" placeholder="E-mail" required>
        <input type="date" min="2023-01-01" max="3000-12-31" required>
        <input type="time" required>
        <select required>
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
            <p style="margin-top:20px;"><strong>Openingstijden:</strong><br>Ma - Do: 16:00 - 22:00<br>Vr - Zo: 15:00 - 23:00</p>
        </div>
        <div class="contact-form">
            <h3>Stuur Ons Een Bericht</h3>
            <form>
                <input type="text" placeholder="Naam" required>
                <input type="email" placeholder="E-mail" required>
                <textarea rows="5" placeholder="Uw bericht" required></textarea>
                <button type="submit">Verstuur bericht</button>
            </form>
        </div>
    </div>
    <div class="contact-image">
        <img src="assets/images/contact-image.png" alt="Restaurant sfeer">
    </div>
</section>

<?php include("dbcalls/menukaart/read.php"); ?>

<footer>© 2026 Kumo Sushi Nijmegen</footer>

</body>
</html>