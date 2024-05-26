<meta http-equiv="refresh" content="60;">


<?php
include '../connect/connect.php';

date_default_timezone_set('asia/bangkok');
$date = date('Y-m-d');

// ลบข้อมูลการจองที่เก่ากว่าวันที่ปัจจุบัน
$stmt = $conn->prepare("DELETE FROM book_a_table WHERE date_book < :date");
$stmt->bindParam(':date', $date);
$stmt->execute();

// อัพเดทลำดับคิวสำหรับการจองที่เหลืออยู่ทั้งหมดโดยเรียงจากวันที่และเวลาเริ่มต้น
$query = $conn->query("SELECT * FROM book_a_table ORDER BY date_book, startime");

if ($query->rowCount() > 0) {
    $datas = $query->fetchAll();
    $count = 0;
    foreach ($datas as $data) {
        $count++;
        if (is_numeric($count)) { // ตรวจสอบให้แน่ใจว่า $count เป็นตัวเลข
            $updateStmt = $conn->prepare("UPDATE book_a_table SET Cus_que = :count WHERE id = :id");
            $updateStmt->bindParam(':count', $count, PDO::PARAM_INT);
            $updateStmt->bindParam(':id', $data['id'], PDO::PARAM_INT);
            $updateStmt->execute();
        }
    }
}
?>
