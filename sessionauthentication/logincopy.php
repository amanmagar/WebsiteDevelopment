<!DOCTYPE html>
<html lang="en">
<head>
<?php session_start();?>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login to your account</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<style type="text/css">
		.error
		{
			color: red;
			opacity: 80%;
		}
	</style>
</head>
<body>
	<div class="container">
	<br>
	<form action="" method="post">
	<h1>Login to your account</h1>
	<div class="form-group">
	<fieldset>
	Email: <input type="text" name="Email">
	<br>
	<hr>
	Password: <input type="password" name= "Password">
	<br>
	<hr>
	<input type="submit" value="Log In">
	</fieldset>
	</div>
	</form>
	</div>
	<?php
	if ($_SERVER["REQUEST_METHOD"] =="POST") {
		require 'connect.php';
		$Email = $_POST['Email'];
		$Password = $_POST['Password'];
		$Hash = sha1($Password);
		$sql = "SELECT * from tblusers WHERE Email = '$Email' AND Password ='$Hash'";
		$res = mysqli_query($conn,$sql);
		if (mysqli_num_rows($res) > 0) 
		{
		$data= mysqli_fetch_assoc($res);
		$_SESSION['Name']=$data['Name'];
		$_SESSION['Email']=$data['Email'];
		header("Location: dashboard.php");	
		}
		else {
			echo "invalid email or password";
		}
	}
	?>
</body>
</html>