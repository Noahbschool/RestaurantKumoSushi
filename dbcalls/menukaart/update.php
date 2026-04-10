<?php
include "../conn.php";

$itemid = $_POST["item_id"];
$itemimage = $_FILES["itemimage"]["name"];
$itemimagepath = $_FILES["itemimage"]["tmp_name"];
$itemname = $_POST["itemname"];
$itemprice = $_POST["itemprice"];
$itemingredients = $_POST["itemingredients"];

$sql = "UPDATE menu set itemimage = :itemimage, itemname = :itemname,itemprice = :itemprice,itemingredients = :itemingredients WHERE itemid = :itemid";

$stmt = $conn->prepare($sql);
$stmt->bindParam(":itemimage",$itemimage);
$stmt->bindParam(":itemname",$itemname);
$stmt->bindParam(":itemprice", $itemprice);
$stmt->bindParam(":itemingredients", $itemingredients);
$stmt->bindParam(":itemid", $itemid);
move_uploaded_file($itemimagepath, "../../assets/images/".$itemimage);

$stmt->execute();
header("location: ../../admin.php");