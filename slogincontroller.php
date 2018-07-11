<?php include"connection.php" ?>
<?php
if(isset($_POST['ok']))
{	
	$email = $_POST['username'];
	$password = $_POST['password'];
	
	$check = mysql_query("SELECT * FROM student WHERE email = '$email' AND password= '$password'");
	
	if ( mysql_num_rows($check)>0){
		$row = mysql_fetch_array($check);
		$_SESSION['fb_session'] = $row;
		header('location:studenthome.php');
	}
	else{
		echo "Invalid Credentials";
	}
}
?>