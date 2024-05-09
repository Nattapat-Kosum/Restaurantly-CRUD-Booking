<?php
include ('../../connect/connect.php');
// echo "<pre>";
// print_r($_POST);
// echo "<pre>";

$eventId = $_GET['id'];

$sql = $conn->prepare("DELETE FROM event_me_th WHERE id = :id");
$sql->bindParam(':id', $eventId);
$sql->execute();

if ($sql) {
  header ("location: ../event.php?action=th");
}


?>