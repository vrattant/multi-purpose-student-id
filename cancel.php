<?php
require 'connection.inc.php';
mysqli_query($con,"TRUNCATE TABLE current_seller");
mysqli_query($con,"TRUNCATE TABLE current_student");


header('Location: seller.php');
 
 
?>