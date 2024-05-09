<!DOCTYPE HTML>
<?php include '../../connect/connect.php'; ?>
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

    <link href="../HTML/css/bootstrap.min.css" rel='stylesheet' type='text/css' />

    <!-- Custom Theme files -->
    <link href="../HTML/css/style.css" rel='stylesheet' type='text/css' />
    <link href="../HTML/css/font-awesome.css" rel="stylesheet">
    <script src="../HTML/js/jquery.min.js"> </script>
    <script src="../HTML/js/bootstrap.min.js"> </script>
</head>

<body>
    <div class="login">
        <h1><a href="../../index.php?action=en">Restaurant-system </a></h1>
        <div class="login-bottom">
            <h2>Login</h2>
            <form name="frmUser" action="logindata.php" method="post">
                <div class="col-md-6">
                    <div class="login-mail">
                        <input type="text" name="username" placeholder="Username" required="">
                        <i class="fa fa-user"></i>
                    </div>

                    <div class="login-mail">
                        <input type="password" name="password" placeholder="Password" required="">
                        <i class="fa fa-lock"></i>
                    </div>
                </div>

                <div class="col-md-6 login-do">
                    <label class="hvr-shutter-in-horizontal login-sub">
                        <input type="submit" value="login">
                    </label>
                </div>

                <div class="clearfix"> </div>
            </form>
        </div>
    </div>

    <!---->
    <div class="copy-right">
    	<p> &copy; 2022 Minimal. All Rights Reserved | Design by</p>
    </div>
    <!---->

    <!--scrolling js-->
    <script src="../HTML/js/jquery.nicescroll.js"></script>
    <script src="../HTML/js/scripts.js"></script>
    <!--//scrolling js-->
</body>
</html>