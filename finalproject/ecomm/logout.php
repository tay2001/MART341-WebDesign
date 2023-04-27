<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Fleur</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              Fleur
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php"> About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="gallery.php"> Gallery </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="order.php">Cart</a>
                </li>
              </ul>
            </div>
             <div class="quote_btn-container ">
              <a class = "nav_link" href="signup.php">
                Sign up &nbsp;      
              </a>
              <a class = "nav_link" href="login.php">
                Log in &nbsp; 
              </a>
              <a class ="nav_link" href="account.php">
                Account</a>
              
            </div>
              
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->





   <!-- Sign up form -->
 <body>      
<body>
  
<?php
  session_unset();

  session_destroy();
?>

Come again!

<br>

</body>
</body>



<!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>

  <!-- info section -->
  <section class="info_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_logo">
            <h5>
              Fleur
            </h5>
            <p>
              Open since 2012, catering to all of Missoula's flower needs!
            </p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_links pl-lg-5">
            <h5>
              Useful Link
            </h5>
            <ul>
              <li class="active">
                <a href="index.html">
                  Home
                </a>
              </li>
              <li>
                <a href="about.php">
                  About
                </a>
              </li>
              <li>
                <a href="gallery.php">
                  Gallery
                </a>
              </li>

            </ul>
          </div>
        </div>
        
        <div class="col-md-3">
          <div class="info_contact">
            <h5>
              Contact
            </h5>
            <div>
              <img src="images/location-white.png" alt="">
              <p>
                Open 10am - 7pm
                <br>
                375 N Higgins St, Missoula, MT 59801
              </p>
            </div>
            <div>
              <img src="images/telephone-white.png" alt="">
              <p>
                (406)999-9999
              </p>
            </div>
            <div>
              <img src="images/envelope-white.png" alt="">
              <p>
                lesfleurs@gmail.com
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->

  <!-- footer section -->
  <footer class="container-fluid footer_section">
    <p>
      &copy; <span id="displayYear"></span> All Rights Reserved By
      <a href="https://html.design/">Free Html Templates</a>
    </p>
  </footer>
  <!-- footer section -->

</html>
