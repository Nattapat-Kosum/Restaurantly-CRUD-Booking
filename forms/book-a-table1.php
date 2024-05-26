<?php 
 include '../connect/connect.php';
 function randtext($range){
  $char = 'ABCDEFGHIGKLMNOPQRSTUVWXYZ';
  $start = rand(1,(strlen($char)-$range));
  $shuffled = str_shuffle($char);
  return substr($shuffled,$start,$range);
}
$rend = randtext(6);
 
 $replacetxt = str_replace('/', '-', $_POST['date']);
 $Date=date('Y-m-d', strtotime($replacetxt));


      $header = "#รายการจองโต๊ะใหม่!";
      $name_user = $_POST['username1'];
      $user_email = $_POST['useremail1'];
      $user_phone = $_POST['UserPhone1'];
      $date_book = $Date;
      $startime = $_POST['timeBook'];
      $of_people = $_POST['people'];
      $tablebooking  = $_POST['selector'];
      $user_message	 = $_POST['messageUser'];
      $color = $_POST['color'];
      $Cus_status = $_POST['statusBook'];

      

      $hour = " +3 hour";
      $timeup = date("H:i:s",strtotime($startime.$hour));
      $hour2 = "-1 min";
      $timeup2 = date("H:i:s",strtotime($startime.$hour2));

      $stmt = $conn->prepare("SELECT * FROM book_a_table WHERE date_book = '$date_book' and tablebooking = :selector and 
      (startime >= '$startime' and startime <= '$timeup' or endtime >= '$startime' and endtime <= '$timeup')");

      $stmt->bindParam(':selector', $tablebooking);
      $stmt->execute();


      if ($stmt->rowCount() > 0) {
        echo '<script type="text/javascript">';
        echo ' alert("โต๊ะที่เลือกถูกจองไว้แล้วในเวลานี้ สามารถเช็คโต๊ะที่ว่างได้ในปฏิทิน หรือจองช่วงเวลาอื่น ๆ")';
        echo '</script>';
        echo '<script>window.history.back()</script>';
        
      }else {
        $sql = $conn->prepare("SELECT * FROM book_a_table WHERE user_phone = :UserPhone1");

        $sql->bindParam(':UserPhone1', $user_phone);
        $sql->execute();

            if ($sql->rowCount() > 0) {             
                        echo '<script type="text/javascript">';
                        echo 'alert("เบอร์โทรนี้ถูกใช้ในการจองไปแล้ว เพื่อป้องกันไม่ให้เกิดการของซํ้า กรุณาใช้เบอร์อื่นหรือยกเลิกการจองเก่าก่อน")';
                        echo '</script>';
                        echo '<script>window.history.back()</script>';
                        
            }else {   
              
                 $sql = $conn->prepare("INSERT INTO book_a_table (name_user, user_email, user_phone, date_book, startime, alert_time, endtime, of_people, tablebooking, user_message, Cus_status, color, booking_code, Cus_que)
                 VALUES (:username1, :useremail1, :UserPhone1, :date_book, :timeBook, :timeup2, :timeup, :people, :selector, :messageUser, :statusBook, :color, :rend, 0)");
                
                  $sql->bindParam(':date_book', $date_book);
                  $sql->bindParam(':timeup2', $timeup2);
                  $sql->bindParam(':timeup', $timeup);
                  $sql->bindParam(':rend', $rend);
                  $sql->bindParam(':username1', $name_user);
                  $sql->bindParam(':useremail1', $user_email);
                  $sql->bindParam(':UserPhone1', $user_phone);
                  $sql->bindParam(':timeBook', $startime);
                  $sql->bindParam(':people', $of_people);
                  $sql->bindParam(':selector', $tablebooking);
                  $sql->bindParam(':messageUser', $user_message);
                  $sql->bindParam(':statusBook', $Cus_status);
                  $sql->bindParam(':color', $color);

                  $sql->execute();
              
                  $id = $conn->lastInsertId();
                  
                      // include '../backend/mail.php';

                  header("location: ../customer_detail.php?action=en&id=".$id);
                  // exit();

                  include '../backend/Line_Notify.php'; //เรียกใช้ Line Notify API ส่งข้อความไปใน Line
                  

      }
    }
           
			
  //exit();


?>