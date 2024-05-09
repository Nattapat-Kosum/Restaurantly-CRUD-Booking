
<?php 

// Line Notify
      define('LINE_API',"https://notify-api.line.me/api/notify");
 
      $token = ""; //ใส่Token

      $str1 = "คุณ(Mr/Miss): $name_user ได้ทำการจองโต๊ะอาหาร วันที่(Booking Date): $date_book เวลา: $startime จำนวน: $of_people ท่าน โต๊ะที่จอง: $tablebooking รหัสการจอง: $rend";

      $res = notify_message($str1,$token); // ข้อความที่ต้องการส่ง สูงสุด 1000 ตัวอักษร
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
        

?>