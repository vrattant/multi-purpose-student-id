<?php
if(isset($_POST['username'])&&isset($_POST['password']))
{
$username = $_POST['username'];
$password = $_POST['password'];
$password_hash=md5($password);
 
//echo $password_hash;
 
if(!empty($username)&&!empty($password))
{
$query = mysql_query("SELECT * FROM admin WHERE username ='".$username."' AND password ='".$password_hash."'") or die(mysql_error()); 
 
$data = mysql_fetch_array($query);
 
$test=$data['password'];
 
$query_run=$query;
$query_num_rows = mysql_num_rows($query_run);
if($query_num_rows==0)
{
echo 'Invadid username/password combination.';
}
else if($query_num_rows==1)
{
echo 'ok';
$user_id= mysql_result($query_run,0,'id');
$user_id=$data['id'];
$_SESSION['user_id'] = $user_id;
header("Location:".$_SERVER['PHP_SELF']. " ");
}
{
}
 
}
else
{
echo 'You must supply a username and password';
}
 
}
 
?>
<style type="text/css">
.css1 {
	color: #F00;
	font-family: 'cooper black';
}
.css1 u strong {
	color: #005;
}
.css1 {
	color: #000079;
}
#fb {
    float: left;
    position: absolute;
    display: inline;
    width: 100px;
	height: 70px;
    bottom: 0;
    right: 0;
}

#logo {
    bottom: 0;
    display: inline;
    left: 0;
    position: absolute;
}

#top {
    height: 100px;
    margin: 0;
    padding: 10px 0;
    position: relative;
}
</style>

<body background="seller login bg.jpg">
<div align="center">
<form action="<?php echo $current_file; ?>" method="POST">

  <div id="top">
   
        <img id = "logo" src="ThaparUniversityLogo.jpg" title="tu logo">
    
    <a href="index.php"> <img id="fb" src="home.png" title="home"></a>
    
</div>
  <p align="right" class="css1">&nbsp;</p>
  <h1 align="center" class="css1">&nbsp;</h1>
  <h1 align="center" class="css1">&nbsp;</h1>
  <h1 align="center" class="css1"><strong><u>ADMINISTRATOR LOGIN</u></strong></h1>
  <p align="center" class="css1">&nbsp;</p>
  <p align="center" class="css1">&nbsp;</p>
  <p><strong>LOGIN</strong></p>
  <p><strong>Username:</strong>
    <input type="text" name="username">&nbsp&nbsp&nbsp&nbsp; <strong>Password:</strong>
    <input type="password" name="password"><br><br>
    <input type="submit" value="Log in">
  </p>
</form>
</div>
</body>

