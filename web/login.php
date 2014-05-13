<?php
ob_start();
?>
<?php
if(isset($_POST['submit'])){
	include '../config/db_con.php';
	include '../framework/login_functionality.php';
	global $_dbcon;
	$login_username=$_POST['username'];
	$login_password=$_POST['password'];
	$login_username = $_dbcon->real_escape_string($login_username);
	$login_password = $_dbcon->real_escape_string($login_password);
	$sql="SELECT*FROM users WHERE name='$login_username' AND password='$login_password'";
	$result= $_dbcon->query($sql);
	$count=$result->num_rows;
	$row=$result->fetch_assoc();
	if($count==1){
		if ($row['is_admin']==1) { 
    			header("Location: admin/adminPanel.php");
		} 
		elseif($row['is_admin']==0) {
    			header("Location: user/userPage.php");  
		}
	}
	else{
		echo "<script type='text/javascript'>alert('Error! Wrong username or password!')</script>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Delta-Task3</title>
<link rel="stylesheet" href="css/style.css">
<h1>Welcome</h1>
</head>
<body>
<div class="wrapper" id="wrapper">
<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>" id="logInBox" accept-charset="UTF-8">
<fieldset class="formsBackground" style="text-align:center;width:50%;margin:10% auto;">
<legend align="center">LogIn</legend><br>
<input type="text" name="username" placeholder="Username" maxlength="15"><span>*</span><br><br>
<input type="password" name="password" placeholder="Password" maxlength="15"><span>*</span><br><br>
<input type="submit" value="Log in" name="submit">
</fieldset>
</form>
</div>
</body>
</html>
