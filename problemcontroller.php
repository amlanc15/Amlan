<?php include "connection.php" ?>
<?php
if(isset($_POST['ok']))
	{
		$os=$_POST['os'];
		$cpuno=$_POST['cpuno'];
		$monitorno=$_POST['monitorno'];
		$keyboardno= $_POST['keyboardno'];
		$mouseno= $_POST['mouseno'];
		$problem= $_POST['problem'];
		$sname= $_POST['sname'];
		$email= $_POST['email'];
		$address= $_POST['address'];
		$phno= $_POST['phno'];
		$pid=$_POST['pid'];
		$id = $_SESSION['probid'] ;
		
			$Query = mysql_query("INSERT INTO damaged(os,cpuno,monitorno,keyboardno,mouseno,problem,sname,email,phno,address,pcid)
				values('$os','$cpuno','$monitorno','$keyboardno','$mouseno','$problem','$sname','$email','$phno','$address','$pid')")
				or die (mysql_error());
			$q=mysql_query("DELETE FROM issues WHERE id=$id") or die (mysql_error());
				if($Query==1)
				{
					header('location:adminhome.php');
				}

	}

?>