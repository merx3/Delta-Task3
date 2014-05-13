
<?php
	require_once '../../config/db_con.php';
	require_once '../../data/groups.php';
	require_once '../../data/users.php';
?>

<?php
// CREATE USER SCRIPT
	if(isset($_POST['submit'])){
		$table='users';
		$_username=$_POST['username'];
		$_password=$_POST['pass'];
		$_repassword=$_POST['repeat_pass'];
		$_user_groups=$_POST['user_groups'];
		if(isset($_POST['is_admin'])){
			$_is_admin = 1;
		}
		else{
			$_is_admin = 0;
		}
		if($_password==$_repassword){
			echo db_addNewUSer($_username, $_password, $_is_admin, $_user_groups, 0); // 0 means the user's not delted ()
			echo "<script type='text/javascript'>
					alert('User created successfully!');
					window.location.href='adminPanel.php';
				</script>";
		}
		else{
			echo "<script type='text/javascript'>alert('Error! Passwords were not matching!')</script>";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Delta-Task3</title>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/jquery-ui-1.10.4.css">
	<script type="text/javascript" src="../js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="../js/jquery-ui-1.10.4.js"></script>
	<script type="text/javascript">
		var groups = [
		<?php
			$dbGroups = db_getAllGroups();
			$groups = "\"";
			$groups .= implode("\",\"", $dbGroups);
			$groups .= "\"";
			echo $groups;
		?>
		];
	</script>
	<script type="text/javascript" src="../js/groups-auto-complete.js"></script>
</head>
<body>
	<div class="wrapper" id="wrapper">
	<form method="post" id="createUser" accept-charset="UTF-8">
		<fieldset class="formsBackground" style="text-align:center;width:50%;margin:10% auto;">
			<legend align="center">Create user</legend><br>
			<input type="text" name="username" placeholder="Username" maxlength="255"><span>*</span><br><br>
			<input type="password" name="pass" placeholder="Password" maxlength="50"><span>*</span><br><br>
			<input type="password" name="repeat_pass" placeholder="Repeat password" maxlength="50"><span>*</span><br><br>
			<input type="checkbox" name="is_admin" id="is_admin" value="1">Admin rights <br><br>			
			<div class="ui-widget">
				<label for="user_groups">User groups: </label><br>
				<input id="user_groups" name="user_groups" size="30"><br><br>	
			</div>
			<input type="submit" value="Create" name="submit">
		</fieldset>
	</form>
	</div>
</body>
</html>
