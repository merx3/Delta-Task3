<!DOCTYPE html>
<html>
<head>
<title>Delta-Task3</title>
<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<table class="table">
<tbody>
<?php
include '../../config/db_con.php';
$table='users';
$query="SELECT*FROM $table WHERE is_admin='0'";
$result=mysql_query($query)or die(mysql_error());

function deleteUser(){
	//$delete="DELETE FROM users WHERE name='$row[0]'";
	echo "$row[0] delete";
	echo "asdasdasd";
}

if (mysql_num_rows($result) > 0) {
    echo "<table cellpadding=10 border=1>
	<tr>
	<th>ID</th>
	<th>username</th>
	<th>Edit</th>
	<th>Delete</th>
	</tr>";
    while($row = mysql_fetch_row($result)) {
        echo "<tr>";
        echo "<td>"."<center>".$row[0]."</td>";
        echo "<td>"."<center>".$row[1]."</td>";
        echo "<td>"."<input type='submit' name='edit' value='Edit' class='buttons'>"."</td>";
        echo "<td>"."<input type='button' name='delete' value='Delete' class='buttons' onClick='test()'>"."</td>";
        echo "</tr>";
   }
    echo "</table>";
}
else {
    echo "No users found!";
}

mysql_free_result($result);

mysql_close($_con); 
?>
</tbody>
</table>
<a href="createUser.php">
<button type="submit" class="buttons">Create new user</button><br>
</a>
</body>
</html>