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
		$pid=$_POST['pid'];
		$id = $_SESSION['probid'] ;
		$Qu1 = mysql_query("SELECT * FROM servicecenter s where s.name='$sname'") or die(mysql_error());
		while($r1=mysql_fetch_array($Qu1)){ 
		$email= $r1['email'];
		$address= $r1['address'];
		$phno= $r1['phoneno'];
		
		
			$Query = mysql_query("INSERT INTO damaged(os,cpuno,monitorno,keyboardno,mouseno,problem,sname,email,phno,address,pcid)
				values('$os','$cpuno','$monitorno','$keyboardno','$mouseno','$problem','$sname','$email','$phno','$address','$pid')")
				or die (mysql_error());
			$q=mysql_query("DELETE FROM issues WHERE id=$id") or die (mysql_error());
				if($Query==1)
				{
					header('location:adminhome.php');
				}
			}
	}

?>