<?php session_start();
require_once('dbconnection.php');
if(isset($_POST['login']))
{
$password=$_POST['password'];
$dec_password=$password;
$useremail=$_POST['email'];
$ret= mysqli_query($con,"SELECT * FROM users WHERE email='$useremail' and password='$dec_password'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="admin.php";
$_SESSION['login']=$_POST['email'];
$_SESSION['id']=$num['id'];
$_SESSION['name']=$num['username'];
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
echo "<script>alert('Invalid username or password');window.location='adminlogin.php';</script>";
$extra="index.php";
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
//header("location:http://$host$uri/$extra");
exit();
}
}
?>
<html>
<head>
<title>adminlogin</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="home.css">
    <link rel="stylesheet" type="text/css" href="login.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
<body>
     <nav class="navbar navbar-expand-lg fixed-top">
        <a class="navbar-brand logo">
            <span>Health Monitoring</span>
        </a>
      <input type="checkbox" id="click">
      <label for="click" class="menu-btn">
        <i class="fas fa-bars"></i>
      </label>
      <ul>
        <li><a class="active" href="home.php">Home</a></li>
        <li><a href="about.php">About</a></li>
      </ul>
    </nav>
  <div>
       <!-- <img src="https://www.cmicharter.org/userfiles/1407/my%20files/stick_figure_working_laptop_desk_500_clr_4555.gif?id=4082&width=473"
            style="padding-top:130px;padding-left:100px" width="600" height="500"><br><br><br><br>-->
        <img src="http://old.my.gov.uz/uploadss/news/149.jpg"
            style="padding-top:130px;padding-left:100px" width="700" height="600"><br><br><br><br>-->
    </div>
        <br><br><br><div class="Registerbox">
        <h1>Admin Login</h1><br><br>
        <div class="register">
            <form name="registration" method="post" action="" enctype="multipart/form-data">
                <div class="form-row">
                    <input type="text" class="text" value="" placeholder="Enter your mail" name="email" required><br><br>
                </div>
                <div class="form-row">
                    <input type="password" class="text" value="" placeholder="Enter password" name="password" required>
                </div><br>
                <div class="form-row">
                <input type="reset" class="btn btn-primary" value="    Reset    ">
                <input type="submit" class="btn btn-primary" name="login"  value="    Login    " >
                </div>
        </form>
        
    </div>

</body>
</head>
</html>