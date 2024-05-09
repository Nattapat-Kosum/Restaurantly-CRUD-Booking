<meta http-equiv="refresh" content="60;URL='http://localhost/systems_test/backend/Alert_Notify.php'">

<?php  
    include ('../connect/connect.php');
    include 'Line_Notify.php';
    date_default_timezone_set('asia/bangkok');
    $date = date('Y-m-d');
    $time = date('G:i');
    echo date('H:i:s');


    $sql = $conn->query("SELECT *FROM book_a_table WHERE date_book = '$date' and ('$time' = alert_time)");
    $rows = $sql->fetchAll();

    foreach ($rows as $row) {

        $bookId = $data['id'];

        if($sql->rowCount() > 0) {
            $stmt = $conn->prepare("SELECT * FROM book_a_table WHERE id = :id");
            $stmt->bindParam(':id', $bookId);
            $stmt->execute();
            $data = $stmt->fetch();

            $str = "สวัสดีคุณ: ".$data['name_user']." คุณได้จองอาหาร".$data['tablebooking']." ของทางร้านอาหารช่วงเวลา ".$data['startime']." ไว้ ขณะนี้ใกล้ถึงเวลาการจองของคุณแล้ว สามารถเดินทางมาที่ร้านอาหารได้เลยครับ";
            $res = notify_message($str,$token);

        }
    }

    // $query = mysqli_query($conn,$sql);
    // while($data = mysqli_fetch_array($query)){
    //     if($query->num_rows > 0){
    //         $sql2 = "SELECT *FROM book_a_table WHERE id=".$data['id'];
    //         $query2 = mysqli_query($conn,$sql2);
    //         $data2 = mysqli_fetch_array($query2);
    //         $str = "สวัสดีคุณ: ".$data2['name_user']." คุณได้จองอาหาร".$data2['tablebooking']." ของทางร้านอาหารช่วงเวลา ".$data2['startime']." ไว้ ขณะนี้ใกล้ถึงเวลาการจองของคุณแล้ว สามารถเดินทางมาที่ร้านอาหารได้เลยครับ";
    //     $res = notify_message($str,$token);
    //     }
    // }

?>