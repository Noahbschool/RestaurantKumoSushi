<?php
include("../conn.php");

$itemimage = $_FILES["itemimage"]["name"];
$itemprice = $_POST["itemprice"];
$itemname = $_POST["itemname"];
$itemingredients = $_POST["itemingredients"];

$sql = "INSERT INTO menu(itemimage, itemprice, itemingredients, itemname) VALUES (:itemimage, :itemprice, :itemingredients, :itemname)";

$stmt = $conn ->prepare($sql);
$stmt->bindParam(":itemimage", $itemimage);
$stmt->bindParam(":itemprice", $itemprice);
$stmt->bindParam(":itemname", $itemname);
$stmt->bindParam(":itemingredients", $itemingredients);



$stmt->execute();

header("location: ../../admin.php");