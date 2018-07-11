<?php include "connection.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>REPAIRING PC</title>
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
			LIST OF PC SENT FOR REPAIRING
		</h2>



	<!-- Reservation -->
	<section class="section-reservation bg1-pattern p-t-100 p-b-113">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 p-b-30">
					<div class="t-center">
						<header>
							<?php
$Query = mysql_query("SELECT * FROM damaged WHERE status=''");
if(mysql_num_rows($Query)>0){
?>
<table cellpadding="5" border="1" cellspacing="0">
<thead>
	<tr>
    	<th><font color="white">Sl No</font></th><th><font color="white">PC NO</font></th><th><font color="white">SUPPLIER NAME</font></th>
		<th><font color="white">PHONE NO</font></th><th><font color="white">EXPECTED DELIVRY DATE</font></th><th><font color="white">PROBLEM</font></th>
		<th><font color="white">COST</font></th><th><font color="white">UPDATE</font></th><th><font color="white">DELIVERED</font></th>
	</tr>
</thead>
<tbody>
<?php 
$sl = 1;
while($row=mysql_fetch_array($Query)){ 
?><form method="post" action="app.php">
		<tr>
		<td><?php echo $sl?></td>
    	<td><div><input type="text" name="pcid" id="pcid" readonly value="<?php echo $row['pcid']?>"/></div></td>
        <td><?php echo $row['sname']?></td>
        <td><?php echo $row['phno']?></td>
        <td><div><input type="date" name="expdeliveydate" id="expdeliverydate" value="<?php echo $row['expdeliverydate']?>"/></div></td>
        <td><?php echo $row['problem']?></td>
        <td><div><input type="text" name="cost" id="cost" value="<?php echo $row['charge']?>"/></div></td>
		<td><input type="submit" name="ok" value="UPDATE"></td>
		<td><input type="submit" name="del" value="DELIVERED"></td>
        </tr>
        
        <?php $sl++; ?>
		</form>
		<?php
		}
		}
else {
	echo "<h3>NO ISSUES RECORDED</h3>";

}

 ?>


</tbody>
</table>
					</header>
					</section>
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
