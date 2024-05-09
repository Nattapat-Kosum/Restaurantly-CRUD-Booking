<form method="post">
			password ที่ต้องการ HASH 
			<input type="text" name="password" placeholder="password" required>
			<br>
			<button type="submit">สร้างรหัสผ่าน</button>
</form>
 
<?php 
if (isset($_POST['password'])) {
 
$password = $_POST['password']; //ใส่ข้อความหรือตัวเลขตามที่ต้องการ
 
 
//กำหนด cost 10 เพื่อให้การเข้ารหัสรวดเร็วยิ่งขึ้น *ตัวเลขยิ่งเยอะ ยิ่งทำงานช้า ซึ่งขึ้นอยู่กับความเร็วของคอมที่เราใช้ครับ เพราะฉะนั้น 10 ก็พอครับ หรือจะลองเพิ่มตัวเลขแล้วรันดูครับ ว่าจะดีเลเยอะไหม!!
$options = [
         'cost' => 10,
     ];
 
//รหัสผ่านมาจากตาราง
$store_password = $password;
 
//นำเข้ากระบวนการเข้ารหัสด้วย PASSWORD_BCRYPT
$passwordHash = password_hash($store_password,  PASSWORD_BCRYPT, $options);
 
echo ' ข้อความที่นำมาสร้างรหัสผ่าน = '.$store_password;
//ลองแสดงออกมาดู ทุกครั้งที่รีเฟรซหน้าเว็บ รหัสจะสุ่มไปเรื่อยๆ
echo '<hr> password hash  using PASSWORD_BCRYPT  <br> '
.'<h4> <font color="red">' .$passwordHash .'</font> </h4>';
echo 'คัดลอกไปใส่ในคอลัมภ์ที่เก็บ password ด้วยนะครับ';
echo '<br> <a href="index.php"> กลับหน้า Login </a>';
 }
?>