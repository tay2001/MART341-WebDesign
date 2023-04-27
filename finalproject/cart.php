<?php
session_start();

if(!isset($_SESSION['cart'])){
  $cart = array();
   $_SESSION['cart'] = $cart;
   array_push($_SESSION['cart'], $_POST['idVal']);
   $_SESSION['cartcntr'] = 0;
   $_SESSION['cartcntr'] = $_SESSION['cartcntr'] +1;
}
else{
   array_push($_SESSION['cart'], $_POST['idVal']);
   $_SESSION['cartcntr'] += 1;
}

header('Location: gallery.php');
?>

