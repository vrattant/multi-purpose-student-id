<?php

session_start();

$page = 'un.php';
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db = 'login-test';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
if(! $conn )
{
  die('Could not connect: ' . mysqli_error());
}
//$sql = 'SELECT seller FROM current_seller';

//mysql_select_db('login-test');
$retval = mysqli_query($conn,"SELECT * FROM current_seller");
if(! $retval )
{
  die('Could not get data: ' . mysqli_error($conn));
}
while($row = mysqli_fetch_assoc($retval))
{
   echo'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';echo $row['seller'];
   echo '<br>';
}




if(isset($_GET['add'])){
	
	$quantity = mysqli_query($conn,"SELECT id, quantity FROM products WHERE id=".(int)$_GET['add']);
	while($quantity_row = mysqli_fetch_assoc($quantity)){
	if($quantity_row['quantity']!=$_SESSION["cart_".(int)$_GET['add']]){
		$_SESSION["cart_".(int)$_GET['add']]++;
		
		}	
	}
	header('Location: '.$page);	
}
if (isset($_GET['remove'])){
	$_SESSION["cart_".(int)$_GET['remove']]--;
	header('Location: '.$page);
	
	}
if (isset($_GET['delete'])){
	$_SESSION["cart_".(int)$_GET['delete']]='0';
	header('Location: '.$page);
	}	

function products(){
	global $conn;
$get=mysqli_query($conn,"SELECT id, name, price FROM products WHERE quantity>0 order by id asc");
if (mysqli_num_rows($get) == 0){
	echo "there are no products to display";
	}
else {
	while($get_row = mysqli_fetch_assoc($get)){
		echo'<p>'.$get_row['name'].'<br> ITEM PRICE = ₹'.$get_row['price'].'<br><a href = "cart.php?add='.$get_row['id'].'">ADD</a></p>';
		}
	
	}
	
}

function cart(){
	global $conn;
	$total = null;
	foreach($_SESSION as $name => $value){
		if($value>0){
			if(substr($name, 0, 5)=="cart_"){
				$id = substr($name, 5, (strlen($name)-5));
				$get = mysqli_query($conn,"SELECT id, name, price FROM products where id =".(int)$id);
				while($get_row = mysqli_fetch_assoc($get)){
					$sub = $get_row['price']*$value;
					echo $get_row['name'].' x '.$value.'&nbsp&nbsp&nbsp@&nbsp&nbsp&nbsp₹'.$get_row['price'].'&nbsp&nbsp&nbsp=&nbsp&nbsp&nbsp₹'.$sub.'<a href="cart.php?remove='.$id.'">[-]</a>&nbsp&nbsp<a href="cart.php?add='.$id.'">[+]</a>&nbsp&nbsp<a href="cart.php?delete='.$id.'">[Delete]</a><br><br>' ;
					
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
	echo 'TOTAL  =  ';echo $total;
	 } 
	 if($total ==0){
	echo "No Products Selected";
	 }
	 else{
		 
		 echo '<a href="log2.php"><br><br>GENERATE INVOICE</a>';
		 
		 
		 
		 }
	}
	
	
	
	
	
?>