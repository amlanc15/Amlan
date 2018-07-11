<?php

include "connection.php";
$gname=$_SESSION['fb_session']['gname'];
$pname=$_SESSION['pname'];

$approve = mysql_query("SELECT * FROM PCTABLE WHERE id = '".$_GET['id']."'") or die(mysql_error());
$sl = 1;
 while($row=mysql_fetch_array($approve))
	{
	$p=$row['processor'];
	$h=$row['harddisk'];
	$o=$row['os'];
	$r=$row['ram'];
	$Query = mysql_query("INSERT INTO hwrquirement(gname,processer,harddisk,ram,os,project,pcid)
				values('$gname','$p','$h','$r','$o','$pname','".$_GET['id']."')")
				or die (mysql_error());
	}
if($Query== 1){
	header('location:studenthome.php');
}
?>