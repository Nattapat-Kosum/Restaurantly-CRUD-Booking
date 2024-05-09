<?php 

 include '../connect/connect.php';


      // About Section
  if($_GET['action'] == 'about_r_th'){

      $title_about_th = $_POST['title_about_th'];
      $detail1_th = $_POST['details_about1_th'];
      $check1_th = $_POST['title_section1_th'];
      $check2_th = $_POST['title_section2_th'];
      $check3_th = $_POST['title_section3_th'];
      $detail2_th = $_POST['details_about2_th'];
      
      include 'me_update.php';

      $sql = $conn->prepare("UPDATE about_th SET img_about_th = '$newname', title_about_th = :title_about_th, detail1_th = :details_about1_th, check1_th = :title_section1_th,
      check2_th = :title_section2_th, check3_th = :title_section3_th, detail2_th = :details_about2_th");
      $sql->bindParam(':title_about_th', $title_about_th);
      $sql->bindParam(':details_about1_th', $detail1_th);
      $sql->bindParam(':title_section1_th', $check1_th);
      $sql->bindParam(':title_section2_th', $check2_th);
      $sql->bindParam(':title_section3_th', $check3_th);
      $sql->bindParam(':details_about2_th', $detail2_th);

      $sql->execute();

      header ("Location:" . $_SERVER['HTTP_REFERER']);
      exit();

      
    //_________________________________________________________________________________________//

      // เพิ่มประเภทของอาหาร Section
    }else if($_GET['action'] == 'categoryt'){

      $cate_nameValue = $_POST['category_name_th'];

      $stmt = $conn->prepare("INSERT INTO category_menu_th (cate_name_th) VALUES (:cate_name_th)");
      $stmt->bindParam(':cate_name_th', $cate_nameValue);

      $stmt->execute();
        header ("Location:" . $_SERVER['HTTP_REFERER']);
        exit();


    //_________________________________________________________________________________________//

      //Chefs Section
    }else if($_GET['action'] == 'chefs'){

      $chefs_name_th = $_POST['name_chefs_th'];
      $chefs_positon_th = $_POST['position_chefs_th'];
      $chefsId = $_POST['id'];
      
      include 'me_update.php';

      $sql = $conn->prepare("UPDATE chefs_th SET chefs_img_th = '$newname', chefs_name_th = :name_chefs_th, chefs_position_th = :position_chefs_th
      WHERE id = :id");

      $sql->bindParam(':name_chefs_th', $chefs_name_th);
      $sql->bindParam(':position_chefs_th', $chefs_positon_th);
      $sql->bindParam(':id', $chefsId);
      $sql->execute();

      if ($sql) {
        move_uploaded_file($tempname,$folder);
        header("location: chefs_list.php?action=th");
        exit();
      }

    //_________________________________________________________________________________________//

      // Home Section
    }else if($_GET['action'] == 'home_r_th'){


      $title_th = $_POST['title_home_th'];
      $drescription_th = $_POST['description_home_th'];


      $sql = $conn->prepare("UPDATE home_th SET title_th = :title_home_th, drescription_th = :description_home_th");
      $sql->bindParam(':title_home_th', $title_th);
      $sql->bindParam(':description_home_th', $drescription_th);

      $sql->execute();

      if ($sql) {
        header ("Location:" . $_SERVER['HTTP_REFERER']);
        exit();
      }


    //_________________________________________________________________________________________//

      // Specials Menu Section
    }else if($_GET['action'] == 'specialsmenu_th'){

      $group_menu_th = $_POST['special_topic_th'];
      $groupname_th = $_POST['menu_name1_th'];
      $detail_specials_th = $_POST['description_home_th'];
      $specMenuId = $_POST['id'];
      
      include 'me_update.php';

      $sql = $conn->prepare("UPDATE specials_th SET img_specials_th = '$newname', group_menu_th = :special_topic_th, groupname_th = :menu_name1_th, detail_specials_th = :description_home_th
      WHERE id = :id");
      $sql->bindParam(':special_topic_th', $group_menu_th);
      $sql->bindParam(':menu_name1_th', $groupname_th);
      $sql->bindParam(':description_home_th', $detail_specials_th);
      $sql->bindParam(':id', $specMenuId);

      $sql->execute();
      
      header( "location: specials.php?action=th");
      exit();


    //_________________________________________________________________________________________//

      // ส่วน Event 
    }else if($_GET['action'] == 'eventbackend_th'){

      $title_event_th = $_POST['title_event_th'];
      $detail_event1_th = $_POST['details_event_th'];
      $text1_th = $_POST['event_section1_th'];
      $text2_th = $_POST['event_section2_th'];
      $text3_th = $_POST['event_section3_th'];
      $detail_event2_th = $_POST['details_event2_th'];
      $price_event_th = $_POST['event_price_th'];
      $eventId = $_POST['id'];
  
      include 'me_update.php';

      $sql = $conn->prepare("UPDATE event_me_th SET img_event_th = '$newname', title_event_th = :title_event_th, detail_event1_th = :details_event_th, text1_th = :event_section1_th,
      text2_th = :event_section2_th, text3_th = :event_section3_th, detail_event2_th = :details_event2_th, price_event_th = :event_price_th WHERE id = :id");

      $sql->bindParam(':title_event_th', $title_event_th);
      $sql->bindParam(':details_event_th', $detail_event1_th);
      $sql->bindParam(':event_section1_th', $text1_th);
      $sql->bindParam(':event_section2_th', $text2_th);
      $sql->bindParam(':event_section3_th', $text3_th);
      $sql->bindParam(':details_event2_th', $detail_event2_th);
      $sql->bindParam(':event_price_th', $price_event_th);
      $sql->bindParam(':id', $eventId);

      $sql->execute();

      if ($sql) {
        move_uploaded_file($tempname,$folder);
        header( "location: event.php?action=th");
        exit();
      }
        
    //_________________________________________________________________________________________//

      // อัพเดทส่วนแสดงผลช่องทางติดต่อ
    }else if($_GET['action'] == 'contact_r_th'){

      $address_contact_th = $_POST['address_th'];
      $detail_op_th = $_POST['openhours_details_th'];
      $email_th = $_POST['email_contact_th'];
      $phone_th = $_POST['tel_contact_th'];

      $sql = $conn->prepare("UPDATE contact_us_th SET address_contact_th = :address_th, detail_op_th = :openhours_details_th, email_th = :email_contact_th,
      phone_th = :tel_contact_th");
      $sql->bindParam(':address_th', $address_contact_th);
      $sql->bindParam(':openhours_details_th', $detail_op_th);
      $sql->bindParam(':email_contact_th', $email_th);
      $sql->bindParam(':tel_contact_th', $phone_th);
      $sql->execute();
      
      header ("Location:" . $_SERVER['HTTP_REFERER']);
      exit();
    }

    //_________________________________________________________________________________________//

        // แก้ไขประเภทสินค้า
      else if($_GET['action'] == 'categoryedit_th'){

        $cate_id = $_POST['id'];
        $cate_name_th = $_POST['category_name_edit'];
        
        $query = $conn->prepare("UPDATE category_menu_th SET cate_name_th = :cate_name_th WHERE id = :id");
        $query->bindParam(':cate_name_th', $cate_name_th);
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
      else if($_GET['action'] == 'menu_r_th'){

        $name_menu_th = $_POST['menu_name_r_th'];
        $description_menu_th = $_POST['details_menu_r_th'];
        $price_menu_th = $_POST['menu_price_r_th'];
        $cate_id = $_POST['selector1_th'];
        
        include 'me_update.php';
        
        $query = $conn->prepare("INSERT INTO menu_th (name_menu_th, description_menu_th, cate_id, price_menu_th, menu_img_th)
        VALUES (:menu_name_r_th, :details_menu_r_th, :selector1_th, :menu_price_r_th, '$newname')");

        $query->bindParam(':menu_name_r_th', $name_menu_th);
        $query->bindParam(':details_menu_r_th', $description_menu_th);
        $query->bindParam(':selector1_th', $cate_id);
        $query->bindParam(':menu_price_r_th', $price_menu_th);

        $query->execute();

         if ($query) {
          move_uploaded_file($tempname,$folder);
          header( "location: menu_list.php?action=th");
          exit();
        } 
         
      }

    //_________________________________________________________________________________________//

        // แก้ไขเมนู
        else if($_GET['action'] == 'menuedit_th'){

          $name_menu_th = $_POST['menu_name_th'];
          $description_menu_th = $_POST['details_menu_th'];
          $price_menu_th = $_POST['menu_price_th'];
          $cate_id  = $_POST['selector1_menu_th'];
          $menuID = $_POST['menuID'];

          include 'me_update.php';
          
          
          $query = $conn->prepare("UPDATE menu_th SET menu_img_th = '$newname', name_menu_th = :menu_name_th, description_menu_th = :details_menu_th, price_menu_th = :menu_price_th,
          cate_id = :selector1_menu_th WHERE id = :menuID");

          $query->bindParam(':menu_name_th', $name_menu_th);
          $query->bindParam(':details_menu_th', $description_menu_th);
          $query->bindParam(':menu_price_th', $price_menu_th);
          $query->bindParam(':selector1_menu_th', $cate_id);
          $query->bindParam(':menuID', $menuID);
          $query->execute();
    
          if ($query) {
            move_uploaded_file($tempname,$folder);
            header( "location: menu_list.php?action=th");
            exit();
          }

        }
    //_________________________________________________________________________________________//

                    

?>