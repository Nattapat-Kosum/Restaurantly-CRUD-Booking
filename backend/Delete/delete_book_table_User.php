<?php
  include ('../../connect/connect.php');

  $user_bookId = $_GET['id'];

      $header = "#รายการยกเลิกการจอง";

      $query = $conn->prepare("SELECT * FROM book_a_table WHERE id = :id");
      $query->bindParam(':id', $user_bookId);
      $query->execute();
      $row = $query->fetch();
      


    if ($row){
      $str = $header. 
      "\r\n".'รายการจองของคุณ  '.$row['name_user'].' วันที่จอง '.date('Y-m-d', strtotime($row['date_book'])).
      ' เวลา '.$row['startime'].' ถูกยกเลิกเรียบร้อยแล้ว';


      $query2 = $conn->prepare("DELETE FROM book_a_table WHERE id = :id");
      $query2->bindParam(':id', $user_bookId);
      $query2->execute();
  
      header ("location: ../../index.php?action=en");

  } 


// Line Notify
    define('LINE_API',"https://notify-api.line.me/api/notify");
    
    $token = "iYMQOf4kFwpFfen7icSwxjpqU9lx3qQT5jIHTv4Bz9B"; //ใส่Token ที่copy เอาไว้
    
    $res = notify_message($str,$token);

    //print_r($res);
    function notify_message($message,$token){
      $queryData = array('message' => $message);
      $queryData = http_build_query($queryData,'','&');
      $headerOptions = array( 
            'http'=>array(
                'method'=>'POST',
                'header'=> "Content-Type: application/x-www-form-urlencoded\r\n"
                          ."Authorization: Bearer ".$token."\r\n"
                          ."Content-Length: ".strlen($queryData)."\r\n",
                'content' => $queryData
            ),
    );

    $context = stream_context_create($headerOptions);
    $result = file_get_contents(LINE_API,FALSE,$context);
    $res = json_decode($result);
    return $res;
    }

    //exit();



?>