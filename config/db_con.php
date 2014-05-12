<?php
	$host="localhost";
	$username="root";
	$password="";
	$db_name="menu_access";
	$_dbcon=new mysqli($host,$username,$password, $db_name)or die(mysql_error());
	if($_dbcon->connect_errno > 0){
    	die('Unable to connect to database [' . $db->connect_error . ']');
	}
?>
