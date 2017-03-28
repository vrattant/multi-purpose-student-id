
<?php 
require 'core.inc.php';
require 'connection.inc.php';
if(loggedin())
 {  
 echo '<body background="seller background.jpg"></body>';
 $rightvar=$_SESSION['user_id'];
 //echo $rightvar;
 $result = mysqli_query($con,"SELECT * FROM users WHERE id = '$rightvar'") or die(mysqli_error($con));  
               $data = mysqli_fetch_array($result);  
   $firstname=$data['firstname'];
   $surname=$data['surname'];
   $userid=$data['id'];
    
   
   echo ' 
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<img src="ThaparUniversityLogo.jpg" width="157" height="95" alt="tu" longdesc="ThaparUniversityLogo.jpg" />
<br>
<br>
</html>
';
mysqli_query($con,"INSERT INTO current_seller (id, seller) VALUES ('$userid', '$firstname')");


echo 'Welcome! ' . $firstname . ' ' . $surname . '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a  href="logout.php"><input type="button"  value="Logout"/></a>';
echo '<HTML><BODY><br><br><br><br></BODY></HTML>';
echo '
<!DOCTYPE HTML>
<html>
<body id="body-color">
<div id="Sign-In">
<fieldset style="width:30%"><legend>PLEASE ENTER USER DETAILS</legend>
<form method="POST" action="connectivity.php"  autocomplete="off">
Student ID <br><input type="text" name="user" size="40"><br><BR>
4 digit pin(to be entered by the student) <br><input type="password" name="pass" size="40"><br><BR>
<input id="button" type="submit" name="submit" value="SUBMIT">
</form>
</fieldset>
</div>
</body>
</html> ';
 }
 
else
{

include 'login.inc.php';


}
?>