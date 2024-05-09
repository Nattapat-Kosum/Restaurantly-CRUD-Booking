
<?php
    include '../connect/connect.php';
    // $sql = "SELECT * FROM book_a_table WHERE id=".$newid;
    // $query = mysqli_query($conn,$sql);
    // $data = mysqli_fetch_array($query);


    $sql = $conn->query("SELECT * FROM book_a_table WHERE id =".$id);
    $sql->execute();
    $row = $sql->fetch();

    $receiver = $row['user_email'];

    $subject = "Newbia Restuarants";
    $body = "
    อีเมล์รับทราบการจองของคุณ $name_user
    วันที่จอง: $date_book
    เวลา: $startime
    จำนวน: $of_people ท่าน
    โต๊ะที่ทำการจอง: $tablebooking
    รหัสการจอง: $rend<hr>
    <font color = black><p><b>*หมายเหตุสามารถนำรหัสการจองที่ได้ไปตรวจสอบข้อมูลการจองในเว็บไซต์ได้ที่เมนู 'ดูข้อมูลการจอง หรือ Customer View'</p><b></font>
    "; 
    

    $sender = "From:ohm254249@gmail.com";
        $header = "From:ohm254249@gmail.com \r\n";
        $header .= "Cc:614230020@webmail.npru.ac.th \r\n";
        $header .= "Bcc:satiker2010@hotmail.com \r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/html;charset=UTF-8\r\n";


    if(mail($receiver, $subject, $body, $sender, $header)){
        echo '<script type="text/javascript">';
        echo 'alert "Email sent successfully to $receiver"';
        echo '</script>';
    }else{
        echo '<script type="text/javascript">';
        echo 'alert"Sorry, failed while sending mail!"';
        echo '</script>';
    }
?>