<!DOCTYPE html>
<html lang="en">
<head>
<?php session_start();
?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login to your account | Sunkoshi Rural Municipality</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Bellota Text' rel='stylesheet'>
  <style>
    *{
      padding: 0;
            margin: 0;
            width: 100%;
            font-family: 'Bellota Text';
    }
  </style>
</head>
<?php 
  $nameError=$username=$password=$hash="";
  if ($_SERVER["REQUEST_METHOD"] =="POST") {
		require 'connect.php';
		$username = text_input($_POST['username']);
		$password = text_input($_POST['password']);
		$hash = sha1($password);
		$sql = "SELECT * from tblusers WHERE Username = '$username' AND Password ='$hash'";
		$res = mysqli_query($conn,$sql);
		if (mysqli_num_rows($res) > 0) 
		{
		$data= mysqli_fetch_assoc($res);
		$_SESSION['Username']=$data['Username'];
    $_SESSION['Email']=$data['Email'];
		header("Location: dashboard.php");	
		}
		else {
			$nameError= 'invalid email or password';
		}
  }
  function text_input($data1)
{
    $data1 = trim($data1);
    $data1 = stripslashes($data1);
    $data1 = htmlspecialchars($data1);
    return $data1;
}
  ?>
<body style="background-color: #dc143c">
  <br>
  <br>
  <div class="container  col-sm-4 bg-white rounded shadow-lg ">
    <div class="text-center">
      <img src="/WebsiteDevelopment/Images/logo.png" alt="" class="rounded img-fluid">
    </div>
    <div>
      <fieldset class="wrapper shadow-lg p-4 mb-4 bg-info rounded ">
        <form action="" method="post">
          <div class="form-group">
            <label for="username">Username</label>
            <input class="form-control " name="username" type="text" value="<?= $username?>" placeholder="Enter your username" required>
            <span class="error text-danger"> <?php echo $nameError; ?></span>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control " placeholder="Enter the password " name="password" required>
          </div>
          <div class="text-center">
            <button class="btn btn-success" type="submit">Log In</button>
            <a href="/WebsiteDevelopment/index.php" class="btn btn-danger"><i class="fa fa-home fa-2x"></i></a>
          </div>
        </form>
      </fieldset>
      <footer class="page-footer font-small cyan darken-3 bg-danger rounded">
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3 bg-info">© 2020 Copyright:
          <a href="https://amansamalmagar.wordpress.com" target="_blank" class="text-dark"> amansamalmagar.com.np</a>
        </div>
        <!-- Copyright -->
      </footer>
      <br>
    </div>
  </div>
</body>

</html>