<?php include "connection.php" ?>
<?php
if(isset($_POST['ok']))
{
$supplier= $_POST['supplier'];
$address= $_POST['address'];
$email= $_POST['email'];
$phoneno= $_POST['phoneno'];


$Query =mysql_query("INSERT INTO supplier(sname,address,email,phno) values('$supplier','$address','$email','$phoneno')") or die (mysql_error());
if($Query==1){
	header('location:adminhome.php?');
}
}


?>