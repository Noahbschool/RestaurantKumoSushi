<?php
include("../conn.php");

$reservationid = $_POST["reservationid"];
$reservationname = $_POST["reservationname"];
$reservationemail = $_POST["reservationemail"];
$reservationdate = $_POST["reservationdate"];
$reservationtime = $_POST["reservationtime"];
$reservationamount = $_POST["reservationamount"];

$sql = "UPDATE reservations SET reservationname = :reservationname, reservationemail = :reservationemail, reservationdate = :reservationdate, reservationtime = :reservationtime, reservationamount = WHERE reservationid = :reservationid";

$stmt = $conn->prepare($sql);
$stmt->bindParam(":reservationname", $reservationname);
$stmt->bindParam(":reservationemail", $reservationemail);
$stmt->bindParam(":reservationdate", $reservationdate);
$stmt->bindParam(":reservationtime", $reservationtime);
$stmt->bindParam(":reservationamount", $reservationamount);

$stmt->execute();
header("location: ../../admin.php");