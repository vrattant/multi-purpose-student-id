<?php

require 'core.inc.php';
require 'connection.inc.php';
$rightvar=$_SESSION['user_id'];
 $get = mysql_query("SELECT * FROM student") or die(mysql_error());  
 
               if (mysql_num_rows($get) ==0){
	echo "NO STUDENT TO DISPLAY";
	}
else {
	while($get_row = mysql_fetch_assoc($get)){
		echo'ID :   '.$get_row['id'].'&nbsp---&nbsp&nbsp&nbsp NAME: '.$get_row['firstname'].'&nbsp&nbsp'.$get_row['surname'].'---&nbsp&nbsp&nbspMOBILE NO = '.$get_row['mobile_no'];
		echo '<br><br>';
		}
	
	}
	
	?>