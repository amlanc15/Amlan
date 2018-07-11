<?php include"connection.php" ?>
<?php
if(isset($_POST['ok']))
{	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$check = mysql_query("SELECT * FROM admin WHERE username = '$username' AND password= '$password'");
	
	if ( mysql_num_rows($check)>0){
		$row = mysql_fetch_array($check);
		$_SESSION['fb_session'] = $row;
		header('location:adminhome.php');
	}
	else{
		echo "Invalid Credentials";
	}
}
?>