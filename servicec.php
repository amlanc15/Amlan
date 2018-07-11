<?php include "connection.php"?>
<!DOCTYPE HTML>
<!--
	Broadcast by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>STOCK MANAGEMENT SYSTEM</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<h1><a href="logout.php">LOG <span>OUT</span></li></h1>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a title="reports">REPORTS</a>
						<ul><li><a href="pclist.php">LIST OF PC</a></li>
						<li><a href="supplierlist.php">SUPPLIER LIST</a></li>
						<li><a href="studentlist.php">STUDENT LIST</a></li>
						<li><a href="sslist.php">SERVICE CENTER</a></li>
						<li><a href="studentattendence.php">STUDENT ATTENDENCE</a></li>
						
						</ul></li>
					<li><a title="reports">MASTER</a>
						<ul>
							<li><a href="addapc.php">ADD A PC</a></li>
							<li><a href="addagroup.php">ADD GROUP</a></li>
							<li><a href="addaproject.php">ADD A PROJECT</a></li>
							<li><a href="addasupplier.php">ADD A SUPPLIER</a></li>
							<li><a href="servicecenter.php">ADD SERVICE CENTER</a></li>
						</ul></li>
					<li><a title="reports">TRANSECTION DATA</a>
						<ul>
							<li><a href="attendence.php">ATTENDANCE</a></li>
							<li><a href="allowcationrequest.php">ALLOCATE PC</a></li>
							
						</ul>
					</li>
					
					
					
					
				</ul>
			</nav>


			<!-- Banner -->
			<!--
				To use a video as your background, set data-video to the name of your video without
				its extension (eg. images/banner). Your video must be available in both .mp4 and .webm
				formats to work correctly.
			-->
				<section id="banner">
					<div class="inner">
						<header>
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
		<th><font color="white">CHOOSE SERVICE CENTER</font></th>
	</tr>
</thead>
<tbody>
<?php  

 $sl = 1;
 while($row=mysql_fetch_array($Query)){ 
 $pid=$row['pid'];
 ?>
 <form method="post" action="problemcontroller1.php">
	<tr>
		<td><div><input type="text" name="pid" id="pid" readonly value="<?php echo $pid?>"/></div></td>
    	<td><div><input type="text" name="cpuno" id="cpuno" value="<?php echo $row['cpuno']?>"/></div></td>
        <td><div><input type="text" name="mouseno" id="mouseno" value="<?php echo $row['mouseno']?>"/></div></td>
        <td><div><input type="text" name="monitorno" id="monitorno" value="<?php echo $row['monitorno']?>"/></div></td>
        <td><div><input type="text" name="keyboardno" id="keyboardno" value="<?php echo $row['keyboardno']?>"/></div></td>
        <td><div><input type="text" name="os" id="os" value="<?php echo $row['os']?>"/></div></td>
        <td><div><input type="text" name="problem" id="problem" value="<?php echo $row['comment']?>"/></div></td>
		
		
		
		<td><div><select name="sname" id="sname"><option value="">  CHOOSE SERVICE CENTER </option>
	<?php
	$query1 = mysql_query("SELECT * FROM `servicecenter`");
	while($row1 = mysql_fetch_array($query1)){?>
	<option value ="<?php echo $row1['name'] ?>" > <?php echo $row1['name'] ?></option>
	<?php }?></select>
						</div></td>
		<td><input type="submit" name="ok" value="REPORT"></td>
        </tr>
	</form>
		

        <?php
		$_SESSION['details'] = $Query;
		}?>
        <?php }
else {
	echo "No results found";

}
							?>
							<tr></tr>
				</tbody></table>
							
						
						</header>
					</div>

				</section>

		
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>