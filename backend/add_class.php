
  <?php 

 include '../connect/connect.php';


      // About Section
    
  if($_GET['action'] == 'about_r'){

      $title_about = $_POST['title_about'];
      $detail1 = $_POST['details_about1'];
      $check1 = $_POST['title_section1'];
      $check2 = $_POST['title_section2'];
      $check3 = $_POST['title_section3'];
      $detail2 = $_POST['details_about2'];
      
      include 'me_update.php';

      $sql = $conn->prepare("UPDATE about SET img_about = '$newname', title_about = :title_about, detail1 = :details_about1, check1 = :title_section1,
      check2 = :title_section2, check3 = :title_section3, detail2 = :details_about2");
      $sql->bindParam(':title_about', $title_about);
      $sql->bindParam(':details_about1', $detail1);
      $sql->bindParam(':title_section1', $check1);
      $sql->bindParam(':title_section2', $check2);
      $sql->bindParam(':title_section3', $check3);
      $sql->bindParam(':details_about2', $detail2);

      $sql->execute();
   
      header ("Location:" . $_SERVER['HTTP_REFERER']);
      exit();
      
        
//_________________________________________________________________________________________//

      // เพิ่มประเภทของอาหาร Section
    }else if($_GET['action'] == 'categoryt'){

      $cate_nameValue = $_POST['category_name'];

        $stmt = $conn->prepare("INSERT INTO category_menu (cate_name) VALUES (:cate_name)");
        $stmt->bindParam(':cate_name', $cate_nameValue);

        $stmt->execute();
          header ("Location:" . $_SERVER['HTTP_REFERER']);
          exit();

//_________________________________________________________________________________________//

      //Chefs Section
    }else if($_GET['action'] == 'chefs'){

      $chefs_name = $_POST['name_chefs'];
      $chefs_positon = $_POST['position_chefs'];
      $chefsId = $_POST['id'];
      
      
      include 'me_update.php';

      $sql = $conn->prepare("UPDATE chefs SET chefs_img = '$newname', chefs_name = :name_chefs, chefs_position = :position_chefs
      WHERE id = :id");

      $sql->bindParam(':name_chefs', $chefs_name);
      $sql->bindParam(':position_chefs', $chefs_positon);
      $sql->bindParam(':id', $chefsId);
      $sql->execute();

      if ($sql) {
        move_uploaded_file($tempname,$folder);
        header("location: chefs_list.php?action=en");
        exit();
      }
      
//_________________________________________________________________________________________//

      // Home Section ข้อความส่วนหน้าแรก
    }else if($_GET['action'] == 'home_r'){


      $title = $_POST['title_home'];
      $drescription = $_POST['description_home'];

      
      $sql = $conn->prepare("UPDATE home SET title = :title_home, drescription = :description_home");
      $sql->bindParam(':title_home', $title);
      $sql->bindParam(':description_home', $drescription);

      $sql->execute();

      if ($sql) {
        header ("Location:" . $_SERVER['HTTP_REFERER']);
        exit();
      }


//_________________________________________________________________________________________//

        // อัพเดทเมนูพิเศษ (แนะนำ) section
    }else if($_GET['action'] == 'specialsmenu'){

      $group_menu = $_POST['special_topic'];
      $groupname = $_POST['menu_name1'];
      $detail_specials = $_POST['description_home'];
      $specMenuId = $_POST['id'];

      
      include 'me_update.php';

      $sql = $conn->prepare("UPDATE specials SET img_specials = '$newname', group_menu = :special_topic, groupname = :menu_name1, detail_specials = :description_home
      WHERE id = :id");

      $sql->bindParam(':special_topic', $group_menu);
      $sql->bindParam(':menu_name1', $groupname);
      $sql->bindParam(':description_home', $detail_specials);
      $sql->bindParam(':id', $specMenuId);

      $sql->execute();
      
      header( "location: specials.php?action=en");
      exit();

//_________________________________________________________________________________________//

      //Event Section
    }else if($_GET['action'] == 'eventbackend'){

      $title_event = $_POST['title_event'];
      $detail_event1 = $_POST['details_event'];
      $text1 = $_POST['event_section1'];
      $text2 = $_POST['event_section2'];
      $text3 = $_POST['event_section3'];
      $detail_event2 = $_POST['details_event2'];
      $price_event = $_POST['event_price'];
      $eventId = $_POST['id'];
  
      include 'me_update.php';

      $sql = $conn->prepare("UPDATE event_me SET img_event = '$newname', title_event = :title_event, detail_event1 = :details_event, text1 = :event_section1,
      text2 = :event_section2, text3 = :event_section3, detail_event2 = :details_event2, price_event = :event_price WHERE id = :id");

      $sql->bindParam(':title_event', $title_event);
      $sql->bindParam(':details_event', $detail_event1);
      $sql->bindParam(':event_section1', $text1);
      $sql->bindParam(':event_section2', $text2);
      $sql->bindParam(':event_section3', $text3);
      $sql->bindParam(':details_event2', $detail_event2);
      $sql->bindParam(':event_price', $price_event);
      $sql->bindParam(':id', $eventId);

      $sql->execute();

      if ($sql->execute()) {
        move_uploaded_file($tempname,$folder);
        header( "location: event.php?action=en");
        exit();
      }

    //_________________________________________________________________________________________//

    // อัพเดทส่วนแสดงผลช่องทางติดต่อ
    }else if($_GET['action'] == 'contact'){

      $address_contact = $_POST['addressContact'];
      $detail_op = $_POST['openhours_details'];
      $email = $_POST['email_contact'];
      $phone = $_POST['tel_contact'];

      $sql = $conn->prepare("UPDATE contact_us SET address_contact = :addressContact, detail_op = :openhours_details, email = :email_contact,
      phone = :tel_contact");

      $sql->bindParam(':addressContact', $address_contact);
      $sql->bindParam(':openhours_details', $detail_op);
      $sql->bindParam(':email_contact', $email);
      $sql->bindParam(':tel_contact', $phone);
      $sql->execute();

      header ("Location:" . $_SERVER['HTTP_REFERER']);
      exit();
      
    //_________________________________________________________________________________________//

      // ส่วนการติดต่อ ส่ง mail แจ้งเตือน user contact
    }else if($_GET['action'] == 'contact_email'){

        $replacetxt = str_replace('/', '-', $_POST['date']);
        $date=date('Y-m-d H:i:s', strtotime($replacetxt));
        
        $customerName = $_POST['cusName'];
        $customerEmail = $_POST['cusEmail'];
        $date_Message = $date;
        $subjectMessage = $_POST['cusSubject'];
        $customerMessage = $_POST['cusMessage'];
        $color = $_POST['color'];
        
        $sql = $conn->prepare("INSERT INTO user_message (Cus_Name, Cus_Email, Date_Message, Cus_Subject, Cus_Message, color)
        VALUES (:cusName, :cusEmail, '$date', :cusSubject, :cusMessage, :color)");

        $sql->bindParam(':cusName', $customerName);
        $sql->bindParam(':cusEmail', $customerEmail);
        $sql->bindParam(':cusSubject', $subjectMessage);
        $sql->bindParam(':cusMessage', $customerMessage);
        $sql->bindParam(':color', $color);

        $sql->execute();
        
        header ("Location:" . $_SERVER['HTTP_REFERER']);
        exit();

        // $to = "";
        // $subject = "This is a test";
        // $message = "This is a PHP plain text email example.";
        // $headers =
        //     "From: " .
        //     "\r\n" .
        //     "Reply-To: " .
        //     "\r\n" .

        // $headers = "MIME-Version: 1.0" . "\r\n";
        // $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // mail($to, $subject, $message, $headers);


        // $receiver = "";
        // $subject = $subjectMessage;
        // $body = 
        // "\r\n".'แจ้งเตือนข้อความของคุณ: '.$customerName.
        // "\r\n".' อีเมล์ติดต่อ: '.$customerEmail.
        // "\r\n".' ข้อความ: '.$customerMessage;

        // $header = "From:noob@gmail.com \r\n";
        // $header = "Cc:noob2@gmail.com \r\n";
        // $header .= "MIME-Version: 1.0 \r\n";
        // $header .= "Content-type: text/html;charset=UTF-8\r\n";
        
        // mail($receiver, $subject, $body, $header);
        // header ("Location:" . $_SERVER['HTTP_REFERER']);
      
      
//_________________________________________________________________________________________//
  
       // แก้ไข Galley
        }else if($_GET['action'] == 'gallery_me'){

          $galleryId = $_POST['id'];
           
          include 'me_update.php';

          $sql = $conn->prepare("UPDATE gallery set gallery_img = '$newname' WHERE id = :id");
          $sql->bindParam(':id', $galleryId);
          $sql->execute();

          if($sql) {
            move_uploaded_file($tempname,$folder);
            header("location:javascript://history.go(-1)");
            exit();
          }


//_________________________________________________________________________________________//

        // แก้ไขประเภทสินค้า
        }else if($_GET['action'] == 'categoryedit'){

        $cate_id = $_POST['id'];
        $cate_name = $_POST['category_name_edit'];
        
        $query = $conn->prepare("UPDATE category_menu SET cate_name = :cate_name WHERE id = :id");
        $query->bindParam(':cate_name', $cate_name);
        $query->bindParam(':id', $cate_id);
        $query->execute();

        if ($query) {
          header ("Location:" . $_SERVER['HTTP_REFERER']);
          exit();
        } else {
           echo "Error: " . $query;
           exit();   
        }
      }
  
        

//_________________________________________________________________________________________//

        // เพิ่มเมนู
      else if($_GET['action'] == 'menu_r'){

        $name_menu = $_POST['menu_name'];
        $description_menu = $_POST['details_menu'];
        $price_menu = $_POST['menu_price'];
        $cate_id = $_POST['selector1'];
        
        include 'me_update.php';

        $query = $conn->prepare("INSERT INTO menu(name_menu, description_menu, cate_id, price_menu, menu_img)
        VALUES (:menu_name, :details_menu, :selector1, :menu_price, '$newname')");

        $query->bindParam(':menu_name', $name_menu);
        $query->bindParam(':details_menu', $description_menu);
        $query->bindParam(':selector1', $cate_id);
        $query->bindParam(':menu_price', $price_menu);

        $query->execute();

        if ($query) {
          move_uploaded_file($tempname,$folder);
          header("location: menu_list.php?action=en");
          exit();
        } 

      }

      //_________________________________________________________________________________________//

        // แก้ไขเมนู
        else if($_GET['action'] == 'menuedit'){

          $name_menu = $_POST['menu_name'];
          $description_menu = $_POST['details_menu'];
          $price_menu = $_POST['menu_price'];
          $cate_id  = $_POST['selector1'];
          $menuID = $_POST['menuID'];

          include 'me_update.php';
          
          $query = $conn->prepare("UPDATE menu SET menu_img = '$newname', name_menu = :menu_name, description_menu = :details_menu, price_menu = :menu_price,
          cate_id = :selector1 WHERE id = :menuID");

          $query->bindParam(':menu_name', $name_menu);
          $query->bindParam(':details_menu', $description_menu);
          $query->bindParam(':menu_price', $price_menu);
          $query->bindParam(':selector1', $cate_id);
          $query->bindParam(':menuID', $menuID);
          $query->execute();

          if ($query) {
            move_uploaded_file($tempname,$folder);
            header("location: menu_list.php?action=en");
            exit();
          }
    
        //_________________________________________________________________________________________//
          
          // เช็คสถานะการจอง เช็คด้วย เบอร์โทรที่จอง + รหัสการจองที่ได้หลังจากอีเมลล์หลังจากทำรายการ
          }else if($_GET['action'] == 'cus_view'){
            $user_phone = $_POST['phone_section'];
            $ran2 = $_POST['rand'];

            $stml = $conn->prepare("SELECT * FROM book_a_table WHERE user_phone = :phone_section AND booking_code = :rand");
            $stml->bindParam(':phone_section', $user_phone);
            $stml->bindParam(':rand', $ran2);
            $stml->execute();
            $row = $stml->fetch();

            if ($row) {
              header( "location: ../customer_detail.php?id=".$row['id']);
              exit();
            }else {
              echo "<script>";
              echo "alert(\"เบอร์โทร หรือรหัสการจองที่ใส่ไม่ถูกต้อง\");";
              echo "window.history.back()";
              echo "</script>";
              exit();
            }       

        //_________________________________________________________________________________________//

            // ตอบกลับข้อความ ของระบบหลังบ้าน + ส่งเมล์
        }else if($_GET['action'] == 'reply_message'){

          // $stmt1 = $conn->query("SELECT * FROM user_message");
          // $row = $stmt1->fetch();

          $color = $_POST['color'];
          $replyMessage = $_POST['reply'];
          $cusMesId = $_POST['id'];

          $stmt3 = $conn->prepare("UPDATE user_message SET color = :color, Admin_message = :reply WHERE id = :id");

          $stmt3->bindParam(':color', $color);
          $stmt3->bindParam(':reply', $replyMessage);
          $stmt3->bindParam(':id', $cusMesId);

          $stmt3->execute();

          echo '<script>window.history.go(-2);</script>';
          exit();

          // $receiver =$data['Cus_Email'];
          // $subject = "NewbiaRestaurant: Hello!";
          // $msg = " 
          // <font color=blue><h1>Hello This is Contact from Us for you message Name: $data[Cus_Subject]</h1></font><hr>
          // <font color=black><h3><b>Mr/Miss: $data[Cus_Name]</b></h3></font>
          // <font color=black><h3><b>$replyMessage</b></h3></font><hr>
          // <p><font color=black>If you're have a problem you can contact us Tel: 888-8888</p></font>
          // ";

          //     // $sender = "From:nattapat.k.008@gmail.com";
          //     $headers = 'From: webmaster@example.com' . "\r\n" .
          //     'Reply-To: webmaster@example.com' . "\r\n" .
          //     'X-Mailer: PHP/' . phpversion();


          //     mail($receiver, $subject, $msg, $header);

        //_________________________________________________________________________________________//

          // อัพเดทสีสถานะ
        }else if($_GET['action'] == 'status_check'){
        $status = $_POST['statusCheck'];
        $color = $_POST['color'];
        $colorId = $_POST['id'];

        $stmt = $conn->prepare("UPDATE book_a_table SET Cus_status = :statusCheck, color = :color WHERE id = :id");
        $stmt->bindParam(':statusCheck', $status);
        $stmt->bindParam(':color', $color);
        $stmt->bindParam(':id', $colorId);
        $stmt->execute();

        echo '<script type="text/javascript">';
        echo 'alert("เช็คอินสำเร็จ")';
        echo '</script>';
        echo '<script>window.history.go(-2);</script>';
        exit();

      }                      
        
?>

