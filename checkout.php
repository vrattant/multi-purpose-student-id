<?php


require 'cart.php';
require 'connection.inc.php';


echo'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';echo"INVOICE";echo'<br>';
;
$res = mysqli_query($con,"SELECT seller FROM current_seller");
$cat = mysqli_fetch_array($res);
$result = mysqli_query($con,"SELECT * FROM current_student") or die(mysqli_error());  
               $data = mysqli_fetch_array($result);  
   $firstname=$data['firstname'];
   $surname=$data['surname'];
   $userid=$data['id'];
   $sellername=$cat['seller'];
   echo $userid; echo '&nbsp&nbsp&nbsp'; echo $firstname; echo '&nbsp&nbsp&nbsp'; echo $surname; echo '<br><br>';
 

echo'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
date_default_timezone_set('Asia/Calcutta');
$date = date('m/d/Y h:i:s a', time());
echo $date;
echo '<br>';
$total = null;
	foreach($_SESSION as $name => $value){
		if($value>0){
			if(substr($name, 0, 5)=='cart_'){
				$id = substr($name, 5, (strlen($name)-5));
				$get = mysqli_query($con,'SELECT id, name, price FROM products where id='.(int)$id);
				while($get_row = mysqli_fetch_assoc($get)){
					$sub = $get_row['price']*$value;
					echo $get_row['name'].' x '.$value.'&nbsp&nbsp&nbsp@&nbsp&nbsp&nbsp₹'.$get_row['price'].'&nbsp&nbsp&nbsp=&nbsp&nbsp&nbsp₹'.$sub.'<br>';
					
					}
				}
				if (empty($total)) {
					 if (empty($sub)) {
					 }
					  else {
						   $total = $sub;        
						   }
				}
				else{
					  $total += $sub;
					}
			}
		
			
		
		}
	if (!empty($total)){   
	echo'<br><br>';echo"TOTAL =  ";echo $total;
	 } 
	 $date1 = date('Y-m-d H:i:s');
	 mysqli_query($con,"INSERT INTO misc_student VALUES ('$userid', '$firstname', '$surname', '$sellername', '$date1','$total' )");
	 print_r($_SESSION);
	 echo '<br><br><br><BR><br><br><BR><br><br><BR><br><a  href="log.php"><input type="button"  value="SELLER HOME"/></a>';
	 echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
	 echo '<input type = "button" value = "PRINT" onclick="window.print();" />';
	
	 
?>
