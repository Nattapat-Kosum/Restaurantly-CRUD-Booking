<?php
include ('../../connect/connect.php');
// echo "<pre>";
// print_r($_POST);
// echo "<pre>";

$chefsId = $_GET['id'];

$sql = "DELETE FROM chefs_th WHERE id = :id";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $chefsId);

$stmt->execute();

if($stmt->rowCount() > 0) {
  header ("Location:" . $_SERVER['HTTP_REFERER']);
}


?>