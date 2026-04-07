<?php
include("../conn.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $voornaam = $_POST["voornaam"];
    $achternaam = $_POST["achternaam"];
    $email = $_POST["email"];
    $password_confirm = $_POST["password_confirm"];

    if ($password == $password_confirm) {
        $sqlCHECK = "SELECT * FROM users WHERE username = :username";
        $stmtCHECK = $conn->prepare($sqlCHECK);
        $stmtCHECK->bindParam(":username", $username);
        $stmtCHECK->execute();
        $existingUser = $stmtCHECK->fetch();
        if ($existingUser) {
            echo "User already found";
        } else {

            $sql = "INSERT INTO users (voornaam, achternaam, email, username, password, role) VALUES (:voornaam, :achternaam, :email, :username, :password, 'klant')";

            $stmt = $conn->prepare($sql);

            $stmt->bindParam(':voornaam', $voornaam);
            $stmt->bindParam(':achternaam', $achternaam);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $password);
            $stmt->execute();
        }
    } else {
        echo 'Failed password check';
    }
    header('location: ../../loginpage.php');

}