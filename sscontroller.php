<?php include "connection.php" ?>
<?php
if(isset($_POST['ok']))
{
$ssn= $_POST['servicecenter'];
$address= $_POST['address'];
$email= $_POST['email'];
$phoneno= $_POST['phoneno'];


$Query =mysql_query("INSERT INTO servicecenter(name,address,email,phoneno) values('$ssn','$address','$email','$phoneno')") or die (mysql_error());
if($Query==1){
	header('location:adminhome.php?');
}
}


?>