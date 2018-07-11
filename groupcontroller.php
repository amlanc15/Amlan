<?php include "connection.php" ?>
<?php
if(isset($_POST['ok']))
{
$groupname= $_POST['groupname'];
$unvrn1= $_POST['unvrn1'];
$unvrn2= $_POST['unvrn2'];
$unvrn3= $_POST['unvrn3'];
$unvrn4= $_POST['unvrn4'];
$unvrn5= $_POST['unvrn5'];

$Query =mysql_query("INSERT INTO `group`(`gname`,`unvrn1`,`unvrn2`,`unvrn3`,`unvrn4`,`unvrn5`) values ('$groupname','$unvrn1','$unvrn2','$unvrn3','$unvrn4','$unvrn5')")or die (mysql_error()); 
if($Query==1){
	header('location:adminhome.php?');
}
}


?>