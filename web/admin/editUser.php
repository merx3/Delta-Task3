<?php
	include '../../config/db_con.php';
	$user=$_GET['user_id'];
	if(isset($_POST['submit'])){
		if(isset($_POST['is_admin'])){
			$_is_admin=1;
		}
		else{
			$_is_admin=0;
		}
	$query="UPDATE users SET is_admin='$_is_admin' WHERE user_id='$user'";
	$result=$_dbcon->query($query);
	header("Location: adminPanel.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Edit Data</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?php
	include '../../config/db_con.php';
		$user=$_GET['user_id'];
		$table='users';
		$query="SELECT*FROM $table WHERE user_id='$user'";
		$result=$_dbcon->query($query);
		$id=0;
	if ($result->num_rows > 0) {
		echo "<table id='table' style='margin:2% auto;'>
		<tr>
		<th>ID</th>
		<th>username</th>
		</tr>";
	while($row=$result->fetch_assoc()) {
		$id=$row["user_id"];
		echo "<tr>";
		echo "<td>".$id."</td>";
		echo "<td>".$row["name"]."</td>";
		echo "</tr>";
	}
	echo "</table>";
	}
	else {
		echo "No users found!";
	}
		$result->free();

		$_dbcon->close();
?>
<div class="wrapper" id="wrapper">
	<form method="post" id="createUser" accept-charset="UTF-8">
		<fieldset class="formsBackground" style="text-align:center;width:50%;margin:10% auto;">
			<legend align="center">New Info</legend><br>
			<input type="checkbox" name="is_admin" id="is_admin" value="1">Admin rights <br><br>			
			<div class="ui-widget">
				<label for="user_groups">User groups: </label><br>
				<input id="user_groups" size="30"><br><br>	
			</div>
			<input type="submit" value="Update" name="submit">
		</fieldset>
	</form>
	</div>
</body>
</html>





