<?php
include ('../../connect/connect.php');
// echo "<pre>";
// print_r($_POST);
// echo "<pre>";

$contactId = $_GET['id'];

$sql = "DELETE FROM user_message WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $contactId);
$stmt->execute();

if($stmt->rowCount() > 0) {
  header ("Location:" . $_SERVER['HTTP_REFERER']);
}



?>