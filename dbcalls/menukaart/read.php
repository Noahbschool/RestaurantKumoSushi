<?php
include("../conn.php");

$sql = "SELECT * FROM menu";

$stmt = $conn->prepare($sql);
$stmt->execute();

$items = $stmt->fetchAll();