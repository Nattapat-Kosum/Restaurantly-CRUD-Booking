<?php
    session_start();
    include '../../connect/connect.php';
  

      // ตรวจสอบว่ามีการส่งชื่อผู้ใช้และรหัสผ่านผ่าน POST หรือไม่
    if(isset($_POST['username']) && isset($_POST['password'])) {

      // ใช้ prepared statement เพื่อป้องกันการโจมตีแบบ SQL injection
        $sql = $conn->prepare("SELECT * FROM users WHERE username = :username");
        $sql->execute(array(':username' => $_POST['username']));

        $row = $sql->fetch(PDO::FETCH_ASSOC);

        $_SESSION["id"] = $row['id'];
        $_SESSION["name"] = $row['name'];
        $sesname = $_SESSION["name"];

      if($row){
          // ถ้ามีชื่อผู้ใช้ในฐานข้อมูล ตรวจสอบรหัสผ่าน
          if (password_verify($_POST['password'], $row['password'])) {
          // รหัสผ่านตรงกัน ล็อกอินสำเร็จ
          $_SESSION['name'];
          echo '<script type="text/javascript">';
          echo ' alert("login สำเร็จ! ยินดีต้อนรับคุณ '.$sesname.'")';
          echo '</script>';
          echo '<script>window.location="../index.php?action=en"</script>';
        }else {
          // รหัสผ่านไม่ตรงกัน
          echo '<script type="text/javascript">';
          echo ' alert("Password ไม่ถูกต้อง!")';
          echo '</script>';
          echo '<script>window.history.back()</script>';
      }
      } else {
        // ไม่พบชื่อผู้ใช้
          echo '<script type="text/javascript">';
          echo ' alert("ไม่พบผู้ใช้นี้!")';
          echo '</script>';
          echo '<script>window.history.back()</script>';
      } 
  }
  
?>