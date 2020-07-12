<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Bellota Text' rel='stylesheet'>
    <style type="text/css">
        * {
            padding: 0;
            margin: 0;
            width: 100%;
            font-family: 'Bellota Text';
        }

        .error {
            color: red;
            opacity: 80%;
        }

        .form-group {
            padding: 10px;
        }

        .frmgrp {
            padding: 10px;
            margin: 10px;
            border: solid 2px black;
        }
        .error{
            font-size: 15px;
        }
    </style>
</head>
<body>
<?php 
session_start();
if (!(isset($_SESSION['Username']))) {
	header("Location: /WebsiteDevelopment/SessionAuthentication/login.php");
}
require 'connect.php';
$userid = $_GET["UserId"];
$sql = "SELECT * from tblusers where UserId = $userid ";
$result = mysqli_query($conn, $sql);
#The variables are first given value of zero
$username=$email=$password=$encrypt=$confirm="";
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $username =$row['Username'];
        $email =$row['Email'];
    }
}
$emailError = $usernameError = $passwordError = $confirmPasswordError= "";

if($_SERVER["REQUEST_METHOD"] = "POST")
{
    if (empty($_POST["email"])) {
        $emailError = "Email is required";
      } else {
        $email = text_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailError = "Invalid email format";
        }
    }

    if (empty($_POST["username"]))
    {
        $usernameError="Username is required";
    }
    else
    {
        $username = text_input(($_POST["username"]));
    }

    
    if (empty($_POST["password"]))
    {
        $passwordError="Password is required";
    }
    else
    {
        $password=text_input($_POST['password']);
        $encrypt = sha1($password);
    }
        if (empty($_POST["confirm"]))
        {
            $confirmPasswordError="Confirm Password is required";
        }
        else
        {
            $confirm= text_input($_POST['confirm']);
            if($password !=$confirm)
            {
                $confirmPasswordError="Password and Confirm Password does not match";  
            }
    }
$userid=$_POST["UserId"];
	if ($usernameError=="" && $emailError=="" && $passwordError=="" && $confirmPasswordError=="") 
{
    $sql ="UPDATE  tblusers set Username = '$username',Email = '$Email',Password= '$encrypt' where UserId = $userid";
    // die($sql);
if (mysqli_query($conn,$sql)) {
	$result= " Record updated successfully";
}
else {
	echo "Error:" . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
header("Location: userDataset.php");
}
} 
function text_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
 ?>
    <header>
        <nav class="navbar navbar-expand-sm  navbar-light " style="background-color: rgba(0, 188, 212, 0.3) ;">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">
                    <h3><b>Dashboard</b></h3>
                </a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar-id">
                    <span class="navbar-toggler-icon"> </span>
                </button>
                <div class="collapse navbar-collapse " id="navbar-id">
                    <ul class="navbar-nav text-center ml-right font-weight-bold ">
                        <li class="nav-item "> <a class="nav-link " href="/websitedevelopment/sessionauthentication/logout.php">Log out <i class="fa fa-error fa-2x"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="row">
            <div class="container-fluid">
                <center>
                    <h4>Employee details</h4>
                </center>
                <div class="col-md-4 col-sm-4 frmgrp">
                    <center>
                        <h5>Employee-form</h5>
                    </center>
                    <fieldset>
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" style="text-align: left">
                           <div class="form-group">
                           <input type="hidden" name="UserId" value="<?= $userid ?>">    
                           </div>
                            <div class="form-group">
                                Email:
                                <br>
                                <input class="col-md-12" type="text" value="<?= $email ?>" name="email" required>
                                <span class="text-error error"><?= $emailError ?></span>
                            </div>
                            <div class="form-group">
                                Username:
                                <br>
                                <input class="col-md-12" type="text" value="<?= $username ?>" name="username" required>
                                <span class="text-error error"><?= $usernameError ?></span>
                            </div>
                            <div class="form-group">
                                New Password:
                                <br>
                                <input class="col-md-12" type="password" value="<?= $password ?>" name="password" required>
                                <span class="text-error error"><?= $passwordError ?></span>
                            </div>
                            <div class="form-group">
                                Confirm New Password:
                                <br>
                                <input class="col-md-12" type="password" value="<?= $confirm ?>" name="confirm" required>
                                <span class="text-error error" ><?= $confirmPasswordError ?></span>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" value="submit">Submit</button>
                                <a href="/websitedevelopment/sessionauthentication/dashboard.php" class="btn btn-danger"><i class="fa fa-home fa-2x"></i></a>
                            </div>
                        </form>
                    </fieldset>
                </div>
            </div>
        </div>]
    </main>
    <footer class="stic" style="background-color: #003893;">
        <div class="footer-copyright text-center py-3 bg-info">© 2020 Copyright:
            <a href="#" class="text-dark">
                Sunkoshi Rural Municipality</a> | Developed by
            <a href="" class="text-light">Aman Samal Magar</a>
        </div>
    </footer>
</body>
</html>