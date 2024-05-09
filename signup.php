<!DOCTYPE HTML>
<?php include '../connect/connect.php'; ?>
<html>
<head>
<title>Minimal an Admin Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="../backend/HTML/css/style.css" rel='stylesheet' type='text/css' />
<link href="../backend/HTML/css/font-awesome.css" rel="stylesheet"> 
<script src="../backend/HTML/js/jquery.min.js"> </script>
<script src="../backend/HTML/js/bootstrap.min.js"> </script>
</head>
<body>
	<div class="login">
		<h1><a href="index.html">Minimal </a></h1>
		<div class="login-bottom">
			<h2>Register</h2>
            <form method="POST" action="../backend/add_class.php?action=signupuser">
			<div class="col-md-6">
				<div class="login-mail">
					<input type="text" placeholder="Email" required="" name ="useremail">
					<i class="fa fa-envelope"></i>
				</div>
				<div class="login-mail">
					<input type="password" placeholder="Password" required="" name = "uerpass">
					<i class="fa fa-lock"></i>
				</div>
				<div class="login-mail">
					<input type="password" placeholder="Repeated password" required="" name = "confirm_pass">
					<i class="fa fa-lock"></i>
				</div>
				  <a class="news-letter" href="#">
						 <label class="checkbox1"><input type="checkbox" name="checkbox" ><i> </i>I agree with the terms</label>
					   </a>
	
			</div>
			<div class="col-md-6 login-do">
				<label class="hvr-shutter-in-horizontal login-sub">
					<input type="submit" value="Submit">
					</label>
					<p>Already register</p>
				<a href="login.php" class="hvr-shutter-in-horizontal">Login</a>
			</div>
			<div class="clearfix"> </div>
		</div>
</form>
	</div>
		<!---->
<div class="copy-right">
	<p> &copy; 2022 Minimal. All Rights Reserved | Design by</p>	    </div>
	  
<!---->
<!--scrolling js-->
	<script src="../backend/HTML/js/jquery.nicescroll.js"></script>
	<script src="../backend/HTML/js/scripts.js"></script>
	<!--//scrolling js-->
</body>
</html>

