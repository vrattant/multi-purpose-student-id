<?php
require 'connection.inc.php';
mysqli_query($con,"TRUNCATE TABLE current_seller");


header('Location: seller.php');
 
 
?>