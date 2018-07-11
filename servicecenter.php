<?php include"connection.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>ADD SERVICE CENTER</title>
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
							<h3><font color="white">LOG OUT</font></h3>
						</a>
					</div>

					<!-- Menu -->
					

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
				<a class="txt19">REPORTS</a>
				<ul>
					<li><a href="pclist.php">LIST OF PC</a></li>
					<li><a href="supplierlist.php">SUPPLIER LIST</a></li>
					<li><a href="studentlist.php">STUDENT LIST</a></li>
					<li><a href="sslist.php">SERVICE CENTER</a></li>
					<li><a href="studentattendence.php">STUDENT ATTENDENCE</a></li>
				</ul>
			</li>

			<li class="t-center m-b-13">
				<a class="txt19">MASTER</a>
				<ul>
					<li><a href="addapc.php">ADD A PC</a></li>
					<li><a href="addagroup.php">ADD GROUP</a></li>
					<li><a href="addaproject.php">ADD A PROJECT</a></li>
					<li><a href="addasupplier.php">ADD A SUPPLIER</a></li>
					<li><a href="servicecenter.php">ADD SERVICE CENTER</a></li>
				</ul>
			</li>

			<li class="t-center m-b-13">
				<a class="txt19">TRANSACTION</a>
				<ul>
					<li><a href="attendence.php">ATTENDANCE</a></li>
					<li><a href="allowcationrequest.php">ALLOCATE PC</a></li>
					<li><a href="repairingpc.php">REPAIRING PC</a></li>
							<li><a href="repairedpc.php">REPAIRED PC</a></li>
				</ul>
			</li>
		</ul>
		

		<!-- - -->
		
	</aside>


	<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/bg-title-page-02.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 p-b-30">
					<div class="t-center">
						<span class="tit2 t-center">
						
						</span>

						<h3 class="tit3 t-center m-b-35 m-t-2">
							<font color="white">ENTER THE DETAILS OF THE SERVICE CENTER</font>
						</h3>
					</div>
<form class="wrap-form-reservation size22 m-l-r-auto" method="post" action="sscontroller.php">
						<div class="row">
							<div class="col-md-4">
								<!-- Date -->
								<span class="txt9">
									<font color="red">SERVICE CENTER NAME</font>
								</span>

								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="supplier" placeholder="SUPPLIER NAME">
								</div>
							</div>
							<div class="col-md-4">
								<!-- Date -->
								<span class="txt9">
								 <font color="red">ADDRESS</font>
								</span>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="address" placeholder="ADDRESS">
								</div>
							</div>

							<div class="col-md-4">
								<!-- Time -->
								<span class="txt9">
								<font color="red">EMAIL</font>
								</span>

								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="email" name="email" placeholder="EMAIL ID">
								</div>
									<!-- Select2 -->
									
																	</div>
							</div>
													<div class="row">
							<div class="col-md-4">
								<!-- Date -->
								<span class="txt9">
									<font color="red">PHONE NO</font>
								</span>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="phoneno" placeholder="PHONE NO">
								</div>
							</div>
						<div class="wrap-btn-booking flex-c-m m-t-6">
							<!-- Button3 -->
							<button type="submit" class="btn3 flex-c-m size13 txt11 trans-0-4" name="ok">
								ADD
							</button>
						</div>
					</form>
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
