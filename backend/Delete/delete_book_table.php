<?php
include ('../../connect/connect.php');

      $header = "#แจ้งเตือนรายการยกเลิกการจอง..";
      
      $bookId = $_GET['id'];

      $stmt = $conn->prepare("SELECT * FROM book_a_table WHERE id = :id");
      $stmt->bindParam(':id', $bookId);
      $stmt->execute();
      $row = $stmt->fetch();


    if ($stmt->rowCount() > 0){
      $str =  
      "\r\n".'รายการจองของคุณ  '.$row['name_user'].' วันที่จอง '.date('Y-m-d', strtotime($row['date_book'])).
      ' เวลา '.$row['startime'].' ถูกยกเลิกเรียบร้อยแล้ว';

      $query = $conn->prepare("DELETE FROM book_a_table WHERE id = :id");
      $query->bindParam(':id', $bookId);
      $query->execute();


  
      header("Location: " . $_SERVER['HTTP_REFERER']);

  
 
    }


?>