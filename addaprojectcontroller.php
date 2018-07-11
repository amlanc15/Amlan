<?php include "connection.php" ?>
<?php
if(isset($_POST['ok']))
{
$projectname= $_POST['projectname'];
$projectguide= $_POST['projectguide'];
$Query = mysql_query("INSERT INTO project(pname,guide) values('$projectname','$projectguide')") or die (mysql_error());
if($Query==1){
	header('location:adminhome.php?msg=new Project added');
}

}

?>