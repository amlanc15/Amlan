<?php include "connection.php" ?>
<?php
if(isset($_POST['ok']))
{
$purchasedate=$_POST['purchasedate'];
$warrenty= $_POST['warrenty'];
$supplier= $_POST['supplier'];
$status= $_POST['status'];
$ram= $_POST['ram'];
$harddisk= $_POST['harddisk'];
$processor= $_POST['processor'];
$keybno= $_POST['keybno'];
$mouseno= $_POST['mouseno'];
$cpuno= $_POST['cpuno'];
$monitorno= $_POST['monitorno'];
$os= $_POST['os'];
$Query = mysql_query("INSERT INTO pctable(purchasedate,warrenty,supplier,status,ram,harddisk,processor,keyboardno,cpuno,monitorno,mouseno,os)
 values('$purchasedate','$warrenty','$supplier','$status','$ram','$harddisk','$processor','$keybno','$cpuno','$monitorno','$mouseno','$os')") 
 or die (mysql_error());
if($Query==1){
	header('location:adminhome.php?msg=PC will be allowcated after admin Permission');
}

}

?>