<?php
include("../conn.php");

$reservationname = $_POST["reservationname"];
$reservationemail = $_POST["reservationemail"];
$reservationdate = $_POST["reservationdate"];
$reservationtime = $_POST["reservationtime"];
$reservationamount = $_POST["reservationamount"];

$sql = "INSERT INTO reservations(reservationname, reservationemail, reservationdate, reservationtime, reservationamount) VALUES (:reservationname, :reservationemail, :reservationdate, :reservationtime, :reservationamount)";

$stmt = $conn ->prepare($sql);
$stmt->bindParam(":reservationname", $reservationname);
$stmt->bindParam(":reservationemail", $reservationemail);
$stmt->bindParam(":reservationdate", $reservationdate);
$stmt->bindParam(":reservationtime", $reservationtime);
$stmt->bindParam(":reservationamount", $reservationamount);

$stmt->execute();

header("Location: ../../index.php");