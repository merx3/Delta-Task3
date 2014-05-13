<!DOCTYPE html>
<html>
<head>
<title>Delta-Task3</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<table class="table">
<tbody>
<?php
include '../../config/db_con.php';
include '../../data/users.php';
global $_dbcon;
$table='users';
$query="SELECT*FROM $table WHERE is_admin='0'";
$result=$_dbcon->query($query);
$id=0;
if ($result->num_rows > 0) {
    echo "<table cellpadding=10 border=1>
    <tr>
    <th>ID</th>
    <th>Username</th>
    <th>Groups</th>
    <th></th>
    <th></th>
    </tr>";
    while($row=$result->fetch_assoc()) {
        $id=$row["user_id"];
        $groups = db_getUserGroups($row["name"]);
        echo "<tr>";
        echo "<td>"."<center>".$id."</td>";
        echo "<td>"."<center>".$row["name"]."</td>";
        echo "<td>"."<center>";
        foreach($groups as $group){
            echo $group."<br/>";
        }
        echo "</td>";
        echo "<td><a href='edit.php?user_id=" . $id . "'>Edit</a></td>";
        echo "<td><a href='deleteUser.php?user_id=" . $id . "'>Delete</a></td>";
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
</tbody>
</table>
<a href="createUser.php">
<button type="submit" class="buttons">Create new user</button><br>
</a>
</body>
</html>