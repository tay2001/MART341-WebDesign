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
             <?php if(isset($_SESSION['user_id'])): ?>
    <a class = "nav_link" href="logout.php">
                Log out &nbsp; 
              </a>
<?php else: ?>
    <a class = "nav_link" href="login.php">
                Log in &nbsp; 
              </a>
<?php endif; ?>
              <a class ="nav_link" href="account.php">
                Account</a>
              
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->

    <body>
    <section class ="allorders">
      <div class="container">
        <h1>All Orders</h1>

        <?php
            $name = $_SESSION['user_id'];
    $link=mysqli_connect("webdev.cs.umt.edu", "tp174484", "woo1du5EeR8Aph4iejaithee7Seitu", "tp174484")
     or die('Could not connect ');

    $query = "SELECT OrderNo, Total from ORDERS WHERE Username = '$name'";
     $result = mysqli_query($link, $query) 
    or die("Query failed ");

    if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "OrderNo: " . $row["OrderNo"]. " - Total: " . $row["Total"]. "<br>";
  }
} else {
  echo "0 results";
}
        ?>
      </div>

    </section>  

      <br>
      <br>
  <section class="changeacct">
  <form method = "POST"action="changeacct.php" style="border:1px solid #ccc">
  <div class="container">
    <?php 
    $name = $_SESSION['user_id'];
    $link=mysqli_connect("webdev.cs.umt.edu", "tp174484", "woo1du5EeR8Aph4iejaithee7Seitu", "tp174484")
     or die('Could not connect ');

    $query = "SELECT Username from USER WHERE Username = '$name'";
     $result = mysqli_query($link, $query) 
    or die("Query failed ");

    while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
  foreach ($line as $col_value) {
    echo "<p>Username is: </p>" . "<p> $name </p>";
    echo "<br>";
  }

}


    ?>
    <h1>Change Account Info</h1>
    <hr>

    <label for="email"><b> New Email</b></label>
    <input type="text" name ="nemail" id ="nemail" placeholder="Enter Email" name="email" required>

    <label for="psw"><b> New Password</b></label>
    <input type="password" name = "npass" id="npass" placeholder="Enter Password" name="psw" required>

    <div class="clearfix">
  
      <button type="submit" class="chngebtn">Change</button>
    </div>
  </div>
</form>
      </section>
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
                <a href="index.php">
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
</body>
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