<?php
	$host="localhost";
	$username="";
	$password="";
	$db_name="";
	mysqli_connect($host,$username,$password)
	or die(mysql_error());
	mysqli_select_db($db_name) or die(mysql_error());
?>
