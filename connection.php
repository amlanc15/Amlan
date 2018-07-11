<?php
ob_start();
session_start();
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("ffyp") or die(mysql_error()); 
?>