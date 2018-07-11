<?php

include "connection.php";

$update = mysql_query("UPDATE supplier SET sname = '".$_POST['sname']."' ,address = '".$_POST['address']."' , phno = '".$_POST['phoneno']."' ,
email = '".$_POST['email']."' WHERE id = '".$_POST['id']."'");

if($update== 1){
	header('location:supplierlist.php');
}
?>