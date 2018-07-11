<?php include "connection.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>DAMAGE PC</title>
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
					<div class="wrap_menu p-l-45 p-l-0-xl">
						<nav class="menu">
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
		<h2 class="tit6 t-center">
		</h2>
	<!-- Reservation -->
	<section class="section-reservation bg1-pattern p-t-100 p-b-113">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 p-b-30">
					<div class="t-center">
						<span class="tit2 t-center">
							PROVIDER DETAILS
						</span>

						<?php
								$id = $_SESSION['probid'] ;
								$sname= $_SESSION['sname'];
								$Query = mysql_query("SELECT * FROM issues i WHERE i.id='$id'");
if(mysql_num_rows($Query)>0){
?>
<table cellpadding="5" border="1" cellspacing="0">
<thead>
	<tr>
    	<th><font color="white">PC NO</font></th><th><font color="white">CPU NO</font></th><th><font color="white">MOUSE NO</font></th><th><font color="white">MONITOR NO</font></th>
		<th><font color="white">KEYBOARD NO</font></th><th><font color="white">OS</font></th><th><font color="white">PROBLEM</font></th>
		<th><font color="white">SNAME</font></th><th><font color="white">EMAIL</font></th>
		<th><font color="white">PH NO</font></th><th><font color="white">ADDRESS</font></th>
	</tr>
</thead>
<tbody>
<?php  

 $sl = 1;
 while($row=mysql_fetch_array($Query)){ 
 $pid=$row['pid'];
 $Qu = mysql_query("SELECT * FROM supplier s where s.sname='$sname'") or die(mysql_error());
 while($r=mysql_fetch_array($Qu)){ 
 ?>
 <form method="post" action="problemcontroller.php">
	<tr>
		<td><div><input type="text" name="pid" id="pid" readonly value="<?php echo $pid?>"/></div></td>
    	<td><div><input type="text" name="cpuno" id="cpuno" value="<?php echo $row['cpuno']?>"/></div></td>
        <td><div><input type="text" name="mouseno" id="mouseno" value="<?php echo $row['mouseno']?>"/></div></td>
        <td><div><input type="text" name="monitorno" id="monitorno" value="<?php echo $row['monitorno']?>"/></div></td>
        <td><div><input type="text" name="keyboardno" id="keyboardno" value="<?php echo $row['keyboardno']?>"/></div></td>
        <td><div><input type="text" name="os" id="os" value="<?php echo $row['os']?>"/></div></td>
        <td><div><input type="text" name="problem" id="problem" value="<?php echo $row['comment']?>"/></div></td>
		<td><div><input type="text" name="sname" id="sname" readonly value="<?php echo $r['sname']?>"/></div></td>
		<td><div><input type="text" name="email" id="email" readonly value="<?php echo $r['email']?>"/></div></td>
		<td><div><input type="text" name="phno" id="phno" readonly value="<?php echo $r['phno']?>"/></div></td>
		<td><div><input type="text" name="address" id="address" readonly value="<?php echo $r['address']?>"/></div></td>
		<td><input type="submit" name="ok" value="REPORT"></td>
        </tr>
	</form>
		

        <?php
		$_SESSION['details'] = $Query;
		$_SESSION['supplier'] = $Qu;
		}}?>
        <?php }
else {
	echo "No results found";

}
							?>
							<tr></tr>
				</tbody></table>
					</div>
				</div>	
			</div>
		</section>
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
