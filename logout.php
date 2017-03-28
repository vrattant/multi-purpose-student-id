<?php
require 'core.inc.php';
require 'connection.inc.php';
mysqli_query($con,"TRUNCATE TABLE current_seller");
session_destroy();

header('Location: '.$http_referer);
 
 
?>