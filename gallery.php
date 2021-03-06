<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Bellota Text' rel='stylesheet'>
    <style>
        * {
            padding: 0;
            width: 100%;
            margin: 0;
        }

        #slideshow {
            display: none;
        }
    </style>

</head>

<body>
    <header>
        <div class="sticky-top">
            <div style="text-align:left;background-color: #EEE;color: #003893;font-weight: bold;font-size: 12px;">
                Contact us at @ | email us at sunkoshiruralmun@gmail.com
            </div>
            <nav class="navbar navbar-expand-sm  navbar-light " style="background-color: #dc143c;">
                <div class="container">
                    <a href="#" class="navbar-brand navbar-image">
                        <img src="Images/logo.png" style="width: 220px;height: 130px;">
                    </a>
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar-id">
                        <span class="navbar-toggler-icon"> </span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbar-id">
                        <ul class="navbar-nav text-left ml-auto ">
                            <li class="nav-item active "> <a class="nav-link " href="">Home</a></li>
                            <li class="nav-item "> <a class="nav-link " href="aboutus.php">About Us</a></li>
                            <li class="nav-item"><a class="nav-link " href="statistics.php">Statistics</a></li>
                            <li class="nav-item"><a class="nav-link " href="news.php">News</a></li>
                            <li class="nav-item"><a class="nav-link  " href="gallery.php">Gallery</a></li>
                            <li class="nav-item"><a class="nav-link " href="contactus.php">Contact</a></li>
                            <li class="nav-item"> <a class="nav-link " href="sessionauthentication/login.php"><span>Login</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <center>
                        <h3>Gallery</h3>
                        <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
                            <ol class="carousel-indicators text-dark ">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="Images/sindhupalchowk.png" alt="First slide">
                                    <span>Map of Sindhupalchowk</span>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="Images/powerhouse.jpg" alt="Second slide">
                                    <span>Powerhouse located in the Sindhupalchowks</span>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="Images/visitnepal2020.png" alt="Third slide">
                                    <span>Visit Nepal 2020 official logo</span>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="Images/culture.nepal.jpg" alt="Fourth slide">
                                    <span>Nepali culture</span>
                                </div>
                            </div>
                            <a class="carousel-control-prev " href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </main>
    <footer class="page-footer font-small cyan darken-3" style="background-color: #dc143c;">

<!-- Footer Links -->
<div class="container-fluid text-center text-md-left p-3" style="background-color: #003893;">

  <!-- Grid row -->
  <div class="row" style="padding: 10px;">
    <!-- Grid column -->
    <div class="col-md-6 mt-md-0 mt-3 text-light">

      <!-- Content -->
      <h5 class="text-uppercase">About the Website</h5>
      <p>This website is the official representation of the Sunkoshi Rural Municipality of Sindhupalchowk
        district of Nepal</p>
      <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3227.387287513952!2d85.83015788370673!3d27.75379418478458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ebb1439e42c221%3A0x300ae05e781114f2!2sSunkoshi%20Gaupalika%20Office!5e1!3m2!1sen!2sro!4v1585758015569!5m2!1sen!2sro" width="200" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
    </div>
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none pb-3 ">

    <!-- Grid column -->
    <div class="col-md-3 mb-md-0 mb-3 text-light">

      <!-- Links -->
      <h5 class="text-uppercase font-weight-bold text-white">Quick Links</h5>

      <ul class="list-unstyled">
        <li>
          <a href="index.html">Home</a>
        </li>
        <li>
          <a href="aboutus.php">About Us</a>
        </li>
        <li>
          <a href="gallery.php">Gallery</a>
        </li>
        <li>
          <a href="statistics.php">Statistics</a>
        </li>
        <li>
          <a href="contactus.php">Contact</a>
        </li>
        <li>
          <a href="sessionauthentication/login.php">Employee login</a>
        </li>
      </ul>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-3 mb-md-0 mb-3 text-light">

      <!-- Links -->
      <h5 class="text-uppercase">Follow Us at</h5>

      <ul class="list-unstyled">
        <li>
          <a href="#"><i class="fa fa-facebook fa-2x p-2"></i></a>
        </li>
        <li>
          <a href="#!"> <i class="fa fa-instagram p-2 fa-2x"> </i></a>
        </li>

      </ul>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Links -->
<!-- Footer Elements -->
<div class="container">
  <!-- Grid row-->
  <div class="row">
    <!-- Grid column -->
    <div class="col-sm-12 ">
    </div>
  </div>
</div>
<div class="footer-copyright text-center py-3 bg-info">© 2020 Copyright:
  <a href="#" class="text-dark">
    Sunkoshi Rural Municipality</a> | Developed by
  <a href="" class="text-light">Aman Samal Magar</a>
</div>
<!-- Copyright -->
</footer>
</body>

</html>