<?php include "connection.php" ?>
<?php
if(isset($_POST['ok']))
	{
		$group=$_POST['group'];
		$stream= $_POST['stream'];
		$rollno= $_POST['rollno'];
		$name= $_POST['name'];
		$mobileno= $_POST['mobileno'];
		$email= $_POST['email'];
		$password= $_POST['password'];
		$passoutyear= $_POST['passoutyear'];
		
			$Query = mysql_query("INSERT INTO student(name,passoutyear,stream,unvroll,gname,email,password,mobno)
				values('$name','$passoutyear','$stream','$rollno','$group','$email','$password','$mobileno')")
				or die (mysql_error());
				if($Query==1)
				{
					header('location:index.html?msg=PC will be allowcated after admin Permission');
				}

	}

?>