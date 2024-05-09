<?php
include ('../../connect/connect.php');
// echo "<pre>";
// print_r($_POST);
// echo "<pre>";

if(isset($_GET['id'])) {

  $cate_id = $_GET['id'];
  
  $deleteQuery = $conn->prepare("DELETE FROM category_menu_th WHERE id = :id");
  $deleteQuery->bindParam(":id", $cate_id);

  $deleteQuery->execute();

  if ($deleteQuery) {
    header ("Location:" . $_SERVER['HTTP_REFERER']);
    exit(0);
  }
   
}

?>