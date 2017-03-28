<?php
require 'connection.inc.php';
require 'cart.php';

mysqli_query($con,"TRUNCATE TABLE current_seller");
mysqli_query($con,"TRUNCATE TABLE current_student");
unset($_SESSION["cart_1"]);
unset($_SESSION["cart_2"]);
unset($_SESSION["cart_3"]);
unset($_SESSION["cart_4"]);
unset($_SESSION["cart_5"]);
unset($_SESSION["cart_6"]);
header('Location: seller.php');
 
 
?>