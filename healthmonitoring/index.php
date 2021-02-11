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
$extra="healthparametres.php";
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
echo "<script>alert('Invalid username or password');window.location='index.php';</script>";
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
<title>Login</title>
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
        <li><a class="active" href="home.php"></i> Home</a></li>
        <li><a href="adminlogin.php"></i>Admin</a></li>
        <li><a href="about.php"></i>About</a></li>
      </ul>
    </nav>
  <div>
        <img src="https://recycle.com/wp-content/uploads/2018/05/Sustainable-Wellness-Check-Graphics-01.png"
            style="padding-top:130px;padding-left:100px" width="700" height="300"><br><br><br><br>
        <p style="padding-top:20px;padding-left:100px;font-size: 23px;text-align:left;text-align:justify;text-justify:inter-word;">In this application,it will give employees more power to keep an eye<br> on their health and can provide peace of mind for those managing<br>health conditions remotely. It will helpful to maintain the employees <br>health to prevent from major risk without any occur and continuous<br>monitoring helps to keep track of whole employees health. Record <br>and monitor all activity in real time.</p>
    </div>
        <br><br><br><div class="Registerbox">
        <h1>Login</h1><br><br>
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
            <a href="forgotpassword.php">Lost your password?</a><br>
            <a href="signup.php">Don't have an account?</a><br>
        </form>
        
    </div>

</body>
</head>
</html>