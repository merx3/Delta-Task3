<!DOCTYPE html>
<html>
<head>
	<title>Delta-Task3</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="logIn.css">
	<h1>Welcome</h1>
</head>
<body>
	<?php
		include'db_con.php';
		$table="users";
		$login_username=$_POST['username'];
		$login_password=$_POST['password'];
		
		$login_username = stripslashes($login_username);
		$login_password = stripslashes($login_password);
		$login_username = mysql_real_escape_string($login_username);
		$login_password = mysql_real_escape_string($login_password);
		$sql="SELECT * FROM $table WHERE username='$login_username' and password='$login_password'";
		$result=mysql_query($sql);
		$count=mysql_num_rows($result);
		if($count==1){
			session_register("username");
			session_register("password"); 
			header("location:adminPanel.php");
		}
		else {
			echo "Wrong Username or Password";
		}
?>
	<div class="wrapper" id="wrapper">
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>" id="logInBox" accept-charset="UTF-8">
		<fieldset class="formsBackground">
			<legend align="center">LogIn</legend><br>
			<input type="text" name="username" placeholder="Username" maxlength="15"><span>*</span><br><br>
			<input type="password" name="password" placeholder="Password" maxlength="15"><span>*</span><br><br>
			<input type="submit" value="Log in">
		</fieldset>
	</form>
	</div>
</body>
</html>
