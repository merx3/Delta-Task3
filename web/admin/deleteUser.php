<?php
include '../../config/db_con.php';
if (isset($_GET['user_id']) && is_numeric($_GET['user_id']))
{
	$id = $_GET['user_id'];
	$sql = "DELETE FROM users WHERE user_id='$id'";
	//$query = mysql_query($sql)or die(mysql_error());
	$result=$_dbcon->query($sql);
	header("Location: adminPanel.php");
}
else
{
	header("Location: adminPanel.php");
}
?>
