<!DOCTYPE html>
<html lang="en">
<?php session_start();
if (!(isset($_SESSION['Username']))) {
	header("Location: /WebsiteDevelopment/sessionauthenticationr/SessionAuthentication/login.php");
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organizational Input Form</title>
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
require 'connect.php';
$dob=date("Y-m-d");
$name =$address=$profession=$contact=$result="";
$nameError = $addressError = $dobError = $professionError=$contactError= "";

if($_SERVER["REQUEST_METHOD"] = "POST")
{
    if (empty($_POST["name"])) {
        $nameError = "Name is required";
      } else {
        $name = text_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $nameError = "Only letters and white space allowed";
          }

        // check if e-mail address is well-formed
    }

    if (empty($_POST["address"]))
    {
        $addressError="address is required";
    }
    else
    {
        $address = text_input(($_POST["address"]));
    }

    
    if (empty($_POST["dob"]))
    {
        $dobError="Date of Birth is required";
    }
    else
    {
        $dob=text_input($_POST['dob']);
    }

    if (empty($_POST["profession"]))
     {
        $professionError="Profession is required";
     }
    else
    {
        $profession= text_input($_POST['profession']);
    }
    if (empty($_POST["contact"]))
    {
       $contactError="Contact No is required";
    }
   else
   {
       $contact= text_input($_POST['contact']);
       if((preg_match("/[^0-9]/", '', $str)) && strlen($str) == 10)
            {
            $contactError="Invalid contact format";
            }
   }
  if ($nameError =="" && $addressError =="" && $dobError =="" && $professionError== "" && $contactError=="") {
    $sql="INSERT INTO tblPersonal (Name,Address,DateOfBirth,Profession,Contact) VALUES ('$name','$address','$dob','$profession','$contact')";

    if (mysqli_query($conn, $sql)) {
        $result="New personal data has been added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }
}
mysqli_close($conn);
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
        <div>
            <div class="container-fluid">
                <center>
                    <h4>Create a new organizational record</h4>
                </center>
                <div class="frmgrp col-lg-6">
                    <center>
                        <h5>Register-form</h5>
                    </center>
                    <fieldset>
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" style="text-align: left">
                            <div class="form-group">
                                Name:
                                <br>
                                <input class="col-md-12" type="text" value="<?= $name ?>" name="name" required>
                                <span class="text-error error"><?= $nameError ?></span>
                            </div>
                            <div class="form-group">
                            Address:
                                <br>
                                <input class="col-md-12" type="text" value="<?= $address ?>" name="address" required>
                                <span class="text-error error"><?= $addressError ?></span>
                            </div>
                            <div class="form-group">
                            Date Of Birth:
                                <br>
                                <input class="col-md-12" type="date" value="<?= $dob ?>" name="dob" required>
                                <span class="text-error error"><?= $dobError ?></span>
                            </div>
                            <div class="form-group">
                            Profession:
                                <br>
                                <input class="col-md-12" type="text" value="<?= $profession ?>" name="profession" required>
                                <span class="text-error error" ><?= $professionError ?></span>
                            </div>
                            <div class="form-group">
                            Contact:
                                <br>
                                <input class="col-md-12" type="text " value="<?= $contact ?>" name="contact" required>
                                <span class="text-error error" ><?= $contactError ?></span>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" value="submit">Submit</button>
                                <span class="bg-success text-white"><?=$result?></span>
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