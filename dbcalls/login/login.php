<?php
include("../conn.php");

$voornaam = $_POST["voornaam"];

 $sql = "";

$stmt = $conn->prepare($sql);

$stmt ->bindParam(":voornaam", $voornaam);
$stmt -> execute();