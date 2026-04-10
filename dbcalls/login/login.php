<?php
session_start();
include("../conn.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE username = :username";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $user = $stmt->fetch();
    if ($user) {
        if ($password == $user['password']) {
            $_SESSION['role'] = $user['role'];
            header('location: ../../admin.php');
        } else {
            echo 'Wrong User Details';
        }
    } else {
        echo 'Wrong User Details';
    }
}