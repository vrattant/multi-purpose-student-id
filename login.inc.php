<?php
if(isset($_POST['username'])&&isset($_POST['password']))
{
$username = $_POST['username'];
$password = $_POST['password'];
//$password_hash=md5($password);
 
//echo $password_hash;
 
if(!empty($username)&&!empty($password))
{
$query = mysqli_query($con,"SELECT * FROM users WHERE username ='".$username."' AND password ='".$password."'") or die(mysqli_error($con)); 
 
$data = mysqli_fetch_array($query);
 
$test=$data['password'];
 
$query_run=$query;
$query_num_rows = mysqli_num_rows($query_run);
if($query_num_rows==0)
{
echo 'Invadid username/password combination.';
}
else if($query_num_rows==1)
{
echo 'ok';
//$user_id= mysql_result($query_run,0,'username');
$user_id=$data['username'];
$_SESSION['user_id'] = $user_id;
echo $user_id;
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
<!DOCTYPE html>
<html ><head>
    <meta charset="UTF-8">
    <title>Material Login Form</title>
    
    
    <link rel="stylesheet" href="css/reset.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="css/style1.css">

    
    
    
  </head>

  <body>
   
<!-- Mixins-->
<!-- Pen Title-->
<div class="pen-title">
<ul>
<li><a href="index.html"><img src="images/home11.png" align = "right" height = 70 width = 70></a></li>
</ul>
  <section id = "banner"><h1>Seller Login Portal</h1></section>
</div>
<div class="rerun"><a href="">Reset</a></div>
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Login</h1>
    <form action="<?php echo $current_file; ?>" method="POST">
      <div class="input-container">
        <input type="text" id="username" name = "username"required/>
        <label for="username">Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="password" name = "password" required/>
        <label for="password">Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <input type="submit" value="Log in">
      </div>
    </form>
  </div>
 <!-- <div class="card alt">
    <div class="toggle"></div>
    <h1 class="title">Register
      <div class="close"></div>
    </h1>
    <form>
      <div class="input-container">
        <input type="text" id="username" required/>
        <label for="username">username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="password" required/>
        <label for="password">password</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="Repeat password" required/>
        <label for="Repeat password">Repeat password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button><span>Next</span></button>
      </div>
    </form>
  </div>
</div>
<!-- Portfolio--><!--<a id="portfolio" href="http://andytran.me/" title="View my portfolio!"><i class="fa fa-link"></i></a>
<!-- CodePen--><!--<a id="codepen" href="http://codepen.io/andytran/" title="Follow me!"><i class="fa fa-codepen"></i></a>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>-->

    
    
    
  </body>
</html>

