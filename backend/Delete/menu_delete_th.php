<?php
include ('../../connect/connect.php');

$menuId = $_GET['id'];

$sql = $conn->prepare("DELETE FROM menu_th WHERE id = :id");
$sql->bindParam(':id', $menuId);
$sql->execute();

if($sql) {
  header ("location: ../menu_list.php?action=th");
}

?>