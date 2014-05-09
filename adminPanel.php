<!DOCTYPE html>
<html>
<head>
	<title>Delta-Task3</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<a href="createUser.html">
	<button type="button">Create user</button>
	</a>
		<table class="scheduleTables"id="leftTable">
	<thead>
	<tr>
		<th>Name</th>
		<th>Hours</th>
	</tr>
	</thead>
	<tbody>
	<?php
		/* connect to the db */
		include 'db_con.php';
		$table='users';
		$result=mysqli_query($con,"SELECT*FROM users");
		
		echo "<table border='1'>
		<tr>
		<th>Firstname</th>
		<th>Lastname</th>
		</tr>";
		
		while($row = mysqli_fetch_array($result)) {
		echo $row['username'] . " " . $row['password'];
		echo "<br>";
}

mysqli_close($con);
	?>
	</tbody>
</table>
</body>
</html>
