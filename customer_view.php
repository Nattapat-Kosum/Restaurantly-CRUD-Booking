
<?php
    function random_char($len){
            $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
            $ret_char = "";
            $num = strlen($chars);
            for($i = 0; $i < $len; $i++) {
                $ret_char.= $chars[rand()%$num];
                $ret_char.=""; 
            }
            return $ret_char; 
    } 
?>

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
    ?>

    <div class="mx-auto text-center ">
        <h1 style="margin-top: 100px; min-width: 100%;"><a href="index.php?action=en">Restaurant Reservation </a></h1>
        <div class="login-bottom">
            <h2>
                <div class="from-control">กรอกหมายเลขโทรศัพท์ที่ทำการจอง<br>
                    <h5>(Enter the phone number that made the reservation.)</h5>
                </div>
            </h2>

            <div class="text-center">
                <form method="POST" action="./backend/add_class.php?action=cus_view">
                    <div class="form-group">
                        <input type="tel" class="form-control" id="exampleInputsection1" name="phone_section" placeholder="กรอกเบอร์โทรศัพท์" value="" required>
                    </div>

                    <h2>
                        <div class="from-control">รหัสการจอง<br>
                            <h5>(booking code.)</h5>
                        </div>
                    </h2>

                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputsection1" name="rand" placeholder="กรอกรหัสการจองที่ได้จากอีเมล์" required>
                    </div>
            </div>

            <div class="form-group">
                <button class="btn btn-primary" type="submit" style="margin-top: 15px;"> ตกลง </button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>

    <!--scrolling js-->
    <script src="./backend/HTML/js/jquery.nicescroll.js"></script>
    <script src="./backend/HTML/js/scripts.js"></script>
    <!--//scrolling js-->
    
</body>
</html>