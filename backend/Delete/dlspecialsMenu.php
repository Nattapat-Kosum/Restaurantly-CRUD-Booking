<?php
include ('../../connect/connect.php');
// echo "<pre>";
// print_r($_POST);
// echo "<pre>";
$specmenuId = $_GET['id'];

$sql = $conn->prepare("DELETE FROM specials WHERE id = :id");
$sql->bindParam(':id', $specmenuId);
$sql->execute();

if($sql) {
  header ("location: ../specials.php?action=en");
}

?>