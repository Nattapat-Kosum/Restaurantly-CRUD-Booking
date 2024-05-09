<?php
include ('../../connect/connect.php');
// echo "<pre>";
// print_r($_POST);
// echo "<pre>";
$menuId = $_GET['id'];

$sql = $conn->prepare("DELETE FROM menu WHERE id = :id");
$sql->bindParam(':id', $menuId);
$sql->execute();

if($sql) {
  header ("location: ../menu_list.php?action=en");
}

?>