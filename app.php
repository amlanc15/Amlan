<?php
include "connection.php";
if(isset($_POST['ok']))
{
$expdeliveydate=$_POST['expdeliveydate'];
$cost=$_POST['cost'];
$pcid=$_POST['pcid'];
$approve = mysql_query("UPDATE damaged d SET d.expdeliverydate = '$expdeliveydate' , d.charge = '$cost' WHERE d.pcid = '$pcid'") or die(mysql_error());
if($approve== 1)
	{
	header('location:repairingpc.php');
	}
}
else
{
$expdeliveydate=$_POST['expdeliveydate'];
$cost=$_POST['cost'];
$pcid=$_POST['pcid'];
$approve = mysql_query("UPDATE damaged d SET d.status = 'delivered' WHERE d.pcid = '$pcid'") or die(mysql_error());
if($approve== 1)
	{
	header('location:repairingpc.php');
	}
}

?>