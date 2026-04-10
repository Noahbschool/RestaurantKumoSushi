<?php
include("../conn.php");

$sql = "SELECT * FROM contact";

$stmt = $conn->prepare($sql);
$stmt->execute();

$contacts = $stmt->fetchAll();
