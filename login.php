<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Inloggen - Kumo Sushi</title>
<link rel="stylesheet" href="assets/css/style.css">
<style>
    <?php
    include("dbcalls/login/login.php");
    ?>
    .login-section {
        min-height: calc(100vh - 60px);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 60px 20px;
        background-color: var(--primary-bg);
    }

    .login-box {
        background-color: var(--section-bg);
        padding: 50px 40px;
        border-radius: 20px;
        box-shadow: 0 15px 40px rgba(18,38,58,0.15);
        width: 100%;
        max-width: 440px;
    }

    .login-box h2 {
        font-size: 2em;
        color: var(--dark);
        margin-bottom: 8px;
        text-align: center;
    }

    .login-box p.subtitle {
        text-align: center;
        color: var(--dark);
        opacity: 0.6;
        margin-bottom: 32px;
        font-size: 0.95em;
    }

    .error-msg {
        background-color: rgba(200, 60, 60, 0.1);
        border: 1px solid rgba(200, 60, 60, 0.3);
        color: #c83c3c;
        border-radius: 8px;
        padding: 10px 14px;
        font-size: 0.88em;
        margin-bottom: 20px;
        display: none; /* set display:block via PHP on error */
    }

    .login-box form {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .login-box input {
        padding: 12px 16px;
        border: 1px solid var(--dark);
        border-radius: 8px;
        font-size: 1em;
        background-color: var(--primary-bg);
        color: var(--dark);
        outline: none;
        transition: border-color 0.2s;
    }

    .login-box input:focus {
        border-color: var(--accent-main);
    }

    .login-box button {
        background-color: var(--accent-main);
        color: var(--primary-bg);
        padding: 12px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-size: 1.05em;
        font-weight: bold;
        transition: background-color 0.2s, color 0.2s;
        margin-top: 5px;
    }

    .login-box button:hover {
        background-color: var(--accent-soft);
        color: var(--dark);
    }

    .login-box .links {
        text-align: center;
        margin-top: 20px;
        font-size: 0.9em;
        color: var(--dark);
    }

    .login-box .links a {
        color: var(--accent-main);
        text-decoration: none;
        font-weight: bold;
    }

    .login-box .links a:hover {
        text-decoration: underline;
    }

    .back-link {
        display: block;
        text-align: center;
        margin-top: 10px;
        font-size: 0.88em;
        color: var(--dark);
        opacity: 0.5;
        text-decoration: none;
        transition: opacity 0.2s;
    }

    .back-link:hover {
        opacity: 1;
        color: var(--accent-main);
    }
</style>
</head>
<body>

<nav>
    <ul>
        <li><a href="index.php#home">Home</a></li>
        <li><a href="index.php#menu">Menu</a></li>
        <li><a href="index.php#reservation">Reserveren</a></li>
        <li><a href="index.php#contact">Contact</a></li>
    </ul>
    <a href="login.php" class="login-btn">Inloggen</a>
</nav>

<div class="login-section">
    <div class="login-box">

        <h2>Welkom terug</h2>
        <p class="subtitle">Log in op je account</p>

        <!-- echo error via PHP, set display:block -->
        <div class="error-msg">
            <!-- echo $error here -->
        </div>

        <form action="" method="POST">

            <input type="text" name="username" placeholder="Gebruikersnaam" required>
            <input type="password" name="password" placeholder="Wachtwoord" required>
            <button type="submit">Inloggen</button>

        </form>

        <div class="links">
            Nog geen account? <a href="register.php">Registreren</a>
        </div>

        <a href="index.php" class="back-link">← Terug naar website</a>

    </div>
</div>

<footer>© 2026 Kumo Sushi Nijmegen</footer>

</body>
</html>