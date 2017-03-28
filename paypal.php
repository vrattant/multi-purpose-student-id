<html>
<body>
<?php
require 'core.inc.php';
require 'connection.inc.php';

$rightvar=$_SESSION['user_id'];
 $result = mysql_query("SELECT * FROM student WHERE id = $rightvar") or die(mysql_error());  
               $data = mysql_fetch_array($result);  
   $firstname=$data['firstname'];
   $surname=$data['surname'];
   $userid=$data['id'];
   
   $sum= mysql_query("SELECT sum(balance) AS total FROM misc_student WHERE id= $userid");
 $data1 = mysql_fetch_array($sum);
 $total= $data1['total'];
 
 echo'YOUR TOTAL CARD BILL = &nbsp&nbsp₹' .$total;

?>
<br><br><br> PAY via PAYPAL<br><br>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="you@youremail.com">
<input type="hidden" name="item_name" value="Item Name">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="amount" value="0.00">
<input type="image" src="http://www.paypal.com/en_US/i/btn/x-click-but02.gif" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
</form>

</body>
</html>