<!DOCTYPE HTML>
<html>
<head>
    <title>Minimal an Admin Panel </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

    <link href="./backend/HTML/css/bootstrap.min.css" rel='stylesheet' type='text/css' />

    <!-- Custom Theme files -->
    <link href="./backend/HTML/css/style.css" rel='stylesheet' type='text/css' />
    <link href="./backend/HTML/css/font-awesome.css" rel="stylesheet">
    <script src="./backend/HTML/js/jquery.min.js"> </script>
    <script src="./backend/HTML/js/bootstrap.min.js"> </script>
</head>

<body>
    <?php
        include './connect/connect.php'; 
        $cus_id = $_GET['id'];

        $stml = $conn->prepare("SELECT * FROM book_a_table WHERE id= :id");
        $stml->bindParam(':id', $cus_id);
        $stml->execute();
        
        $row = $stml->fetch();
        
    ?>

    <div class="mx-auto text-center ">
        <h1 style="margin-top: 25px; min-width: 100%;"><a href="./index.php?action=en">Restaurant Reservation </a></h1>

        <div class="login-bottom">
            <h2>
                <b>
                    <div class="alery alert-success text-center">ระบบได้ทำการบันทึกการจองของท่านแล้ว</div>
                </b>
            </h2>

            <div class="text-center"></div>
            <form>
                <div class="form-group">
                    <div class="text-center">
                        <h4>คุณ(Miss/Mr): <?php echo $row['name_user']; ?></h4><br>
                        <h4>อีเมล์(Email): <?php echo $row['user_email']; ?></h4><br>
                        <h4>เบอร์โทรติดต่อ(Phone): <?php echo $row['user_phone']; ?></h4><br>
                        <h4>วันที่(Booking Date): <?php echo $row['date_book']; ?></h4><br>
                        <h4>เวลา(Time): <?php echo $row['startime']; ?></h4><br>
                        <h4>จำนวน(Of People): <?php echo $row['of_people']; ?> ท่าน</h4><br>
                        <h4>โต๊ะที่จอง(Table): <?php echo $row['tablebooking']; ?></h4><br>
                        <h4>รหัสการจอง(ฺBooking code): <?php echo $row['booking_code']; ?></h4><br>
                    </div>

                    <a href="index.php?action=en"><button class="btn btn-primary" type="button"> กลับหน้าแรก (Go Back)</button></a>&nbsp;
                        <input name="id" type="hidden" value="<?php echo $row['id']; ?>" />
                    <a href="./backend/Delete/delete_book_table_User.php?id=<?php echo $row['id'];?>&action=en">
                        <button class="btn btn-danger" type="button" onclick="return Myfunction()"> ยกเลิกการจอง (Cancle Booking) </button>
                    </a>
                    
                    <script>
                        function Myfunction() {
                            alert("รายการของของคุณ---> <?php echo $row ['name_user'] ?> ถูกยกเลิกเรียบร้อยแล้ว");
                        }
                    </script>

                    <div class="clearfix"></div>
            </form>
        </div>
    </div>
    </div>

    <!---->
    <div class="copy-right">
        <p> &copy; 2022 Minimal. All Rights Reserved | Design by</p>
    </div>
    <!---->

    <!--scrolling js-->
    <script src="./backend/HTML/js/jquery.nicescroll.js"></script>
    <script src="./backend/HTML/js/scripts.js"></script>
    <!--//scrolling js-->
    
</body>
</html>