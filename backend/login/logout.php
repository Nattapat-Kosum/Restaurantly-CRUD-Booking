<?php
    // เริ่มต้น session
    session_start();

    // ทำลาย session โดยลบทุกค่าที่อยู่ใน session
    session_unset();

    // ทำลาย session โดยทำลาย session ID
    session_destroy();

    // ส่งผู้ใช้กลับไปยังหน้า login
    header("Location:login.php");
    exit;
?>