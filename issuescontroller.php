<?php include "connection.php"?>
<?php
if(isset($_POST['ok']))
{
$comment= $_POST['comments'];
$gname= $_SESSION['fb_session']['gname'];
$Q =mysql_query("SELECT * FROM PCTABLE p WHERE p.status='$gname'") or die (mysql_error());
 while($row=mysql_fetch_array($Q))
	{

    	$pid=$row['id'];
		$keyboardno=$row['keyboardno'];
        $cpuno=$row['cpuno'];
        $monitorno=$row['monitorno'];
        $mouseno=$row['mouseno'];
        $os=$row['os'];
		$Query = mysql_query("INSERT INTO issues(os,cpuno,monitorno,mouseno,comment,gname,pid,keyboardno) values
		('$os','$cpuno','$monitorno','$mouseno','$comment','$gname','$pid','$keyboardno')") or die (mysql_error());

	if($Query==1)
		{
			header('location:studenthome.php?');
		}
		else
			echo "Sorry!!!!!!!";
	}
}


?>