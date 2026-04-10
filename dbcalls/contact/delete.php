<?php

$contactid = $_POST["contactid"];

$sql = "DELETE FROM menu WHERE contactid= :contactid";

$stmt = $conn->prepare($sql);
$stmt->bindParam(":contactid", $contactid);

$stmt->execute();
header("location: ../../admin.php");