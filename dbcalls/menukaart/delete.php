<?php
include "../conn.php";

$itemid = $_POST["item_id"];

$sql = "DELETE FROM menu WHERE itemid= :itemid";

$stmt = $conn->prepare($sql);
$stmt->bindParam(":itemid", $itemid);

$stmt->execute();
header("location: ../../admin.php");