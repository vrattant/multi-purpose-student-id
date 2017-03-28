<?php

require 'core.inc.php';
require 'connection.inc.php';





function products(){
$get=mysql_query("SELECT * from users");
if (mysql_num_rows($get) ==0){
	echo "there are no sellers to display";
	}
else {
	while($get_row = mysql_fetch_assoc($get)){
		echo'<p>'.$get_row['firstname'].'<br><a href = "cart.php?view='.$get_row['id'].'">VIEW</a></p>';
		}
	
	}
	
}
	
	
	?>