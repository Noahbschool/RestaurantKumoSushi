<?php
include("../conn.php");

$contactname = $_POST["contactname"];
$contactemail = $_POST["contactemail"];
$contactmessage = $_POST["contactmessage"];

$sql = "INSERT INTO contact(contactname, contactemail, contactmessage) VALUES (:contactname, :contactemail, :contactmessage)";

$stmt = $conn ->prepare($sql);
$stmt->bindParam(":contactname", $contactname);
$stmt->bindParam(":contactemail", $contactemail);
$stmt->bindParam(":contactmessage", $contactmessage);

$stmt->execute();

header("Location: ../../index.php");