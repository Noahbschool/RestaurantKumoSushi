<?php
if ($_METHOD == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $voornaam = $_POST["voornaam"];
    $achternaam = $_POST["achternaam"];
    $email = $_POST["email"];   
}

$sql = "INSERT INTO users (voornaam, achternaam, email, username, password, role) VALUES (:voornaam, :achternaam, :email, :username, :password, klant)";

$stmt = $conn->prepare($sql);
$stmt->bind_param(':voornaam', var: $voornaam);
$stmt->bindParam(':achternaam', var: $achternaam);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':username', $username);
$stmt->bindParam(':password', $password);
$stmt->execute();