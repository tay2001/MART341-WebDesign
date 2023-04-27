
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


  <style>

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 500px;
  margin: auto;
  text-align: center;
  font-family: arial;
  display: flex;
}


.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}

ul{
  list-style-type: none;
}
</style>
</head>

<body class="sub_page">

  <div class="hero_area">
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
  </div>


  <!-- gallery section -->
  <section class="gallery_section layout_padding">

    <div class="heading_container justify-content-center">
      <h2>
        Our Gallery
      </h2>
    </div>
  </section>

  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for items... ie: Rose, Arrangement, Corsage">

<ul id="myUL">
  

  <li>
    <div class="card">
    <form method = "post" action="cart.php">
  <img src="images/g-7.jpg" alt="corsage" width="500" height="400">
  <h1>Corsages</h1>
  <p class="price">$20</p>
  <p>Whether for a Wedding or Prom, we got you!</p>
<div class="form-group form-button">
<button type="submit" name="idVal" value="001" class="form-submit">Add to Cart</button>
                            </div>
</div></li>

<br>
</form>
<form method = "post" action="cart.php">
<li><div class="card">
  <img src="images/g-3.jpg" alt="simplearrangement" width="500" height="400">
  <h1>Arrangements</h1>
  <p class="price">$30.00</p>
  <p>Simple arrangements at a modest price</p>
  <div class="form-group form-button">
 <button type="submit" name="idVal" value="002" class="form-submit">Add to Cart</button>
                            </div>
</div></li>

<br>
</form>
<form method = "post" action="cart.php">
<li><div class="card">
  <img src="images/g-9.jpg" alt="rosebox" width="500" height="400">
  <h1>Rose Box</h1>
  <p class="price">$40.00</p>
  <p>Simple box of roses in Pink, red, yellow- every color!</p>
<div class="form-group form-button">
<button type="submit" name="idVal" value="003" class="form-submit">Add to Cart</button>
</div>
                            
</div></li>

</ul>
</form>
<br>



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

  <!-- end info_section -->


  <!-- footer section -->
  <footer class="container-fluid footer_section">
    <p>
      &copy; <span id="displayYear"></span> All Rights Reserved By
      <a href="https://html.design/">Free Html Templates</a>
    </p>
  </footer>
  <!-- footer section -->




</body>

</html>

<script>
function myFunction() {
  // Declare variables
  var input, filter, ul, li, h1, i, txtValue;
  input = document.getElementById('myInput');
  filter = input.value.toUpperCase();
  ul = document.getElementById("myUL");
  li = ul.getElementsByTagName('li');

  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < li.length; i++) {
    h1 = li[i].getElementsByTagName("h1")[0];
    txtValue = h1.textContent || h1.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
</script>