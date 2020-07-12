<!DOCTYPE html>
<html lang="en">
<?php session_start();
if (isset($_SESSION['Username'])) {
  $username=$_SESSION['Username'];
?>

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Sunkoshi Rural Municipality </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Bellota Text' rel='stylesheet'>

    <style>
      * {
        padding: 0;
        margin: 0;
        width: 100%;
        font-family: 'Bellota Text';
      }

      .anlabel {
        width: 150px;
        height: 110px;
        font-size: 15px;
        margin: 5px;
        padding: 10px;
        border: black solid 2px;
      }

      @media screen and (max-width: 600px) {
        .anlabel {
          width: 120px;
          height: 100px;
          font-size: 15px;
          margin: 5px;
          padding: 5px;
        }
      }

      .row {
        margin: 5px;
      }

      .entryCol {
        padding: 10px;
        margin-bottom: 10px;
      }

      h6 {
        font-weight: bold;
      }

      #txt {
        border-style: solid;
        border-color: #dc143c;
        border-radius: 5px;
        padding: 10px;
        font-size: 30px;
        text-align: center;
        text-shadow: 1px 1px black;
        background-color: #eeeeee;
        margin-bottom: 10px;
      }

      .timePad {
        border: 5px black;
        border-style: double;
        background-color: #63cf94;
        border-radius: 5px;
      }

      .sessionDetails {
        padding: 10px;
      }

      .downlabel {
        margin-top: 10px;
        background-color: rgb(115, 185, 164);
        color: white;
      }
    </style>
  </head>

  <body onload="startTime()">
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
              <li class="nav-item "> <a class="nav-link " href="logout.php">Log out <i class="fa fa-error fa-2x"></i></a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <main>
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-2 col-md-2 timePad">
            <div class="sessionDetails text-center p-3">
              <h6>Welcome,</h6>
              <br>
              <img src="../Images/user_logo.png" alt="" class="img-resonsive" style="width: 100px;height: 100px;">
             <h4> <?php echo $username ?></h4>
              <div style="margin-top: 10px;padding: 5px;border: solid black 1px;border-radius: 5px;">
                <a href="" class="btn ">Proile settings</a>
              </div>
            </div>
            <div>
              <center>
                <h6>Current Time</h6>
              </center>
              <div id="txt"></div>
            </div>
          </div>
          <div class="col-md-10 col-sm-10 bg-light">
            <div class=" entryCol">
              <h6>Record Management <i class="fa fa-2x fa-list-alt"></i></h6>
              <hr style="background-color: black;">
              <a href="" class="anlabel btn btn-primary">Personal
                <i class="fa fa-2x fa-user-plus "> </i>
                <i class="fa fa-angle-right"></i>
              </a>
              <a href="" class="anlabel btn btn-info">Organizational
                <i class="fa fa-2x fa-user-plus "> </i>
                <i class="fa fa-angle-right"></i>
              </a>
              <a href="" class="anlabel btn btn-success">Industrial
                <i class="fa fa-2x fa-user-plus "> </i>
                <i class="fa fa-angle-right"></i>
              </a>
            </div>
            <div class="entryCol">
              <h6>Employee Management<i class="fa fa-2x fa-list-alt"></i></h6>
              <hr style="background-color: black;">
              <a href="CRUD/User/userNew.php" class="anlabel btn btn-secondary">Employee
                <div class="downlabel">
                  <i class="fa fa-angle-right"></i>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </main>
    <footer class="stic" style="background-color: #003893;">
      <div class="footer-copyright text-center py-3 bg-info">© 2020 Copyright:
        <a href="#" class="text-dark">
          Sunkoshi Rural Municipality</a> | Developed by
        <a href="" class="text-light">Aman Samal Magar</a>
      </div>
    </footer>
    <script>
      function startTime() {
        var today = new Date();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        var session = "AM";

        if (h == 0) {
          h = 12;
        }

        if (h > 12) {
          h = h - 12;
          session = "PM";
        }

        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('txt').innerHTML =
          h + ":" + m + ":" + s + session;;
        var t = setTimeout(startTime, 500);
      }

      function checkTime(i) {
        if (i < 10) {
          i = "0" + i
        }; // add zero in front of numbers < 10
        return i;
      }
    </script>
  <?php
} else {
  echo "<h1>Unauthorized Access |||</h1>";
  header("Location: login.php");
}
  ?>
  </body>

</html>