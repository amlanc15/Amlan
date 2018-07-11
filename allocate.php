<?php

include "connection.php";
$query=mysql_query("SELECT * FROM hwrquirement WHERE id = '".$_GET['id']."'");
while($row=mysql_fetch_array($query))
{
	$harddisk=$row['harddisk'];
	$processer=$row['processer'];
	$ram=$row['ram'];
	$os=$row['os'];
	$gname=$row['gname'];
	$pcid=$row['pcid'];
	$approve = mysql_query("UPDATE PCTABLE p SET p.status='$gname' WHERE p.id=$pcid") or die(mysql_error());
	$up=mysql_query("UPDATE hwrquirement p SET p.status='$gname' WHERE p.id='".$_GET['id']."'") 
	or die(mysql_error());
if($approve== 1){
	header('location:allowcationrequest.php');
}
else
	echo "SORRY!!!!!!!!!!";
}
?>