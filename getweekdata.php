<?php
include 'db.php';
$week = $_GET['week'];

$sql = "SELECT * FROM week WHERE id = $week";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);
$jsonData=json_encode($row);
header('Content-Type: application/json');
echo $jsonData;
?>
