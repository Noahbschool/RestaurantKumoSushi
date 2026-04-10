<?php
include "../conn.php";

$reservationid = $_POST["reservationid"];

$sql = "DELETE FROM menu WHERE reservationid= :reservationid";

$stmt = $conn->prepare($sql);
$stmt->bindParam(":reservationid", $reservationid);

$stmt->execute();
header("location: ../../admin.php");