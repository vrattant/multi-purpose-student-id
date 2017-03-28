
<?php
$userid=null;
require 'core.inc.php';
require 'connection.inc.php';

if(loggedin()){
$rightvar=$_SESSION['user_id'];
 $get = mysqli_query($con,"SELECT * FROM misc_student WHERE id = $rightvar") or die(mysql_error());  
 
               if (mysqli_num_rows($get) ==0){
	echo "NO TRANSACTIONS TO DISPLAY";
	}
else {
	while($get_row = mysqli_fetch_assoc($get)){
		echo'DATE :   '.$get_row['DATE'].'&nbsp---&nbsp&nbsp&nbspSELLER NAME: '.$get_row['seller'].'---&nbsp&nbsp&nbspTOTAL = '.$get_row['balance'];
		echo '<br><br>';
		}
	
	}
   
echo '<br><br><a  href="student.php"><input type="button"  value="BACK"/></a>';
 echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
 echo '<input type = "button" value = "PRINT" onclick="window.print();" />';

}
?>
