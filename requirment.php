<?php include "connection.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>REQUIRMENT</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<!--===============================================================================================-->
	<link rel="icon" type="image/jpg" href="images/icons/logo.jpg"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="wrap-menu-header gradient1 trans-0-4">
			<div class="container h-full">
				<div class="wrap_header trans-0-3">
					<!-- Logo -->
					<div class="logo">
						<a href="logout.php">
							<h3><font color="yellow">LOG OUT</font></h3>
						</a>
					</div>

					<!-- Menu -->
					<div class="wrap_menu p-l-45 p-l-0-xl">
						<nav class="menu">
							<ul class="main_menu">
								<li>
									<font color="white"><?php echo $_SESSION['fb_session']['name'];?></font>
								</li>

								<li>
									<font color="white">GROUP NAME  : <?php echo $_SESSION['fb_session']['gname'];?></font>
								</li>

								<li>
									<font color="white">ROLL  :<?php echo $_SESSION['fb_session']['unvroll'];?></font>
								</li>

								<li>
									<font color="white"><?php echo $_SESSION['fb_session']['stream']; ?></font>
								</li>
							</ul>
						</nav>
					</div>

					<!-- Social -->
					<div class="social flex-w flex-l-m p-r-20">
						<!--for RIGHT HEADER--!>

						<button class="btn-show-sidebar m-l-33 trans-0-4"></button>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Sidebar -->
	<aside class="sidebar trans-0-4">
		<!-- Button Hide sidebar -->
		<button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

		<!-- - -->
		<ul class="menu-sidebar p-t-95 p-b-70">
			<li class="t-center m-b-13">
				
			</li>

			<li class="t-center m-b-13">
				<a href="requirment.php">ADD UR REQUIRMENT</a>
			</li>

			<li class="t-center m-b-13">
				<a href="pcdetails.php">PC DETAILS</a>
			</li>

			<li class="t-center m-b-13">
				<a href="reportissue.php">REPORT ISSUE</a>
			</li>
			
		</ul>

		<!-- - -->
		
	</aside>


	<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/bg-title-page-02.jpg);">
		<h2 class="tit6 t-center">
		</h2>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 p-b-30">
					<div class="t-center">
						<span class="tit2 t-center">
						</span>
						
						<form class="wrap-form-reservation size22 m-l-r-auto" method="post" action="requirmentcontroller.php">
						<div class="row">
							<div class="col-md-4">
								<!-- Time -->
								<span class="txt9">
									<font color="white">PROJECT NAME</font>
								</span>

								<div class="wrap-inputtime size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<!-- Select2 -->
									<select class="selection-1"  name="pname" id="pname"><option value=""> PROJECT NAME </option>>
									<?php
	$query = mysql_query("SELECT * FROM `project`");
	while($row = mysql_fetch_array($query)){?>
	<option value ="<?php echo $row['pname'] ?>" > <?php echo $row['pname'] ?></option>
	<?php }?></select>
								</div>
							</div>

							<div class="col-md-4">
								<!-- People -->
								<span class="txt9">
									<font color="white">HARD DISK</font>
								</span>

								<div class="wrap-inputpeople size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<!-- Select2 -->
									<select class="selection-1" name="harddisk" id="harddisk">
										<option value="">HARD DISK</option>
										<option value="500GB">500GB</option>
										<option value="1TB">1TB</option>
										<option value="2TB">2TB</option>
									</select>
								</div>
							</div>
							<div class="col-md-4">
								<!-- People -->
								<span class="txt9">
									<font color="white">RAM</font>
								</span>

								<div class="wrap-inputpeople size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<!-- Select2 -->
									<select class="selection-1" name="ram" id="ram">
										<option value="">RAM</option>
										<option value="">- RAM -</option>
										<option value="2GB">2GB</option>
										<option value="4GB">4GB</option>
										<option value="8GB">8GB</option>
									</select>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-4">
								<!-- Name -->
								<span class="txt9">
									<font color="white">PROCESSOR</font>
								</span>

								<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<select class="selection-1" name="processer" id="processer">
										<option value="">PROCESSOR</option>
										<option value="Intel i3">Intel i3</option>
										<option value="Intel i5">Intel i5</option>
										<option value="Intel i7">Intel i7</option>
									</select>
								</div>
							</div>

							<div class="col-md-4">
								<!-- Phone -->
								<span class="txt9">
									<font color="white">OPERATING SYSTEM</font>
								</span>

							<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
								<select class="selection-1" name="os" id="os">
									<option value="">- OPERATING SYSTEM -</option>
									<option value="Windows 7">WINDOWS 7</option>
									<option value="Windows 8">WINDOWS 8</option>
									<option value="Windows 8.1">WINDOWS 8.1</option>
									<option value="Windows 10">WINDOWS 10</option>
									<option value="Linux">LINUX</option>
								</select>
							</div>
							</div>

						<div class="wrap-btn-booking flex-c-m m-t-6">
							<!-- Button3 -->
							<button type="submit" class="btn3 flex-c-m size13 txt11 trans-0-4" name="ok">
								SEARCH
							</button>
						</div>
					</form>
					</div>
				</div>
			</div>

			
		</div>
	</section>


	<!-- Footer -->
	<footer class="bg1">
		

		<div class="end-footer bg2">
			<div class="container">
				<div class="flex-sb-m flex-w p-t-22 p-b-22">
					<div class="p-t-5 p-b-5">
					</div>

					<div class="txt17 p-r-20 p-t-5 p-b-5">
						Copyright &copy; 2018 All rights reserved
					</div>
				</div>
			</div>
		</div>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>



<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/parallax100/parallax100.js"></script>
	<script type="text/javascript">
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
