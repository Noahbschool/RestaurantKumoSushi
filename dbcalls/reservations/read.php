<?php
include("../conn.php");

$sql = "SELECT * FROM reservations";

$stmt = $conn->prepare($sql);
$stmt->execute();

$reservations = $stmt->fetchAll();
