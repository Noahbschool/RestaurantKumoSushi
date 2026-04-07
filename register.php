<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registreren - Kumo Sushi</title>
<link rel="stylesheet" href="assets/css/style.css">
<style>
    .register-section {
        min-height: calc(100vh - 60px);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 60px 20px;
        background-color: var(--primary-bg);
    }

    .register-box {
        background-color: var(--section-bg);
        padding: 50px 40px;
        border-radius: 20px;
        box-shadow: 0 15px 40px rgba(18,38,58,0.15);
        width: 100%;
        max-width: 480px;
    }

    .register-box h2 {
        font-size: 2em;
        color: var(--dark);
        margin-bottom: 8px;
        text-align: center;
    }

    .register-box p.subtitle {
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

    .success-msg {
        background-color: rgba(6, 188, 193, 0.1);
        border: 1px solid rgba(6, 188, 193, 0.3);
        color: var(--accent-main);
        border-radius: 8px;
        padding: 10px 14px;
        font-size: 0.88em;
        margin-bottom: 20px;
        display: none; /* set display:block via PHP on success */
    }

    .form-row {
        display: flex;
        gap: 14px;
    }

    .form-row input {
        flex: 1;
    }

    .register-box form {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .register-box input {
        padding: 12px 16px;
        border: 1px solid var(--dark);
        border-radius: 8px;
        font-size: 1em;
        background-color: var(--primary-bg);
        color: var(--dark);
        outline: none;
        transition: border-color 0.2s;
        width: 100%;
    }

    .register-box input:focus {
        border-color: var(--accent-main);
    }

    .register-box button {
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

    .register-box button:hover {
        background-color: var(--accent-soft);
        color: var(--dark);
    }

    .register-box .links {
        text-align: center;
        margin-top: 20px;
        font-size: 0.9em;
        color: var(--dark);
    }

    .register-box .links a {
        color: var(--accent-main);
        text-decoration: none;
        font-weight: bold;
    }

    .register-box .links a:hover {
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
    <a href="loginpage.php" class="login-btn">Inloggen</a>
</nav>

<div class="register-section">
    <div class="register-box">

        <h2>Account aanmaken</h2>
        <p class="subtitle">Maak gratis een account aan</p>

        <!-- echo error via PHP, set display:block -->
        <div class="error-msg">
            <!-- echo $error here -->
        </div>

        <!-- echo success via PHP, set display:block -->
        <div class="success-msg">
            <!-- echo $success here -->
        </div>

        <form action="/dbcalls/login/register.php" method="POST">

            <div class="form-row">
                <input type="text" name="voornaam" placeholder="Voornaam" required>
                <input type="text" name="achternaam" placeholder="Achternaam" required>
            </div>

            <input type="email" name="email" placeholder="E-mailadres" required>
            <input type="text" name="username" placeholder="Gebruikersnaam" required>
            <input type="password" name="password" placeholder="Wachtwoord" required>
            <input type="password" name="password_confirm" placeholder="Wachtwoord bevestigen" required>

            <button type="submit">Account aanmaken</button>

        </form>

        <div class="links">
            Al een account? <a href="loginpage.php">Inloggen</a>
        </div>

        <a href="index.php" class="back-link">← Terug naar website</a>

    </div>
</div>

<footer>© 2026 Kumo Sushi Nijmegen</footer>

</body>
</html>