<meta http-equiv="refresh" content="60;">

  <?php  
      include '../connect/connect.php';

      date_default_timezone_set('asia/bangkok');
      $date = date('Y-m-d');
      $date2 = date('m-d');
      $count = "0";

      $sql = $conn->query("SELECT * FROM book_a_table WHERE date_book < '$date'");
      $rows = $sql->fetchAll();
   

      if($sql->rowCount() > 0) {
        foreach($rows as $row) {
          $sqldelete = $conn->query("DELETE FROM book_a_table WHERE id=".$row['id']);
        }
      }

      $query = $conn->query("SELECT * FROM book_a_table WHERE date_book = '$date'");

      if($query->rowCount() > 0) {

        // ORDER BY เรียงจากน้อยไปมาก
        $stmt = $conn->query("SELECT * FROM book_a_table ORDER BY date_book , startime");
        $datas = $stmt->fetchAll();

        // วน while ละให้นับจากน้อยไปมากโดยเรียงจาก วันที่ กับเวลา startime ถ้าวันที่กับเวลาที่ใกล้เคียงกับเวลาปัจจุบันจะให้มันนับเป็นคิวก่อน
          foreach($datas as $data) {
          $count++;
          $sql2 = $conn->query("UPDATE book_a_table SET Cus_que = '$count' WHERE id=".$data['id']);

          // echo $data['date_book'];
          // echo $data['startime'];
          // echo "&nbsp;&nbsp;&nbsp;&nbsp;".$count."";
        }
      }


?>