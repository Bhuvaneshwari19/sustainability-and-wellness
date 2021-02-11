<?php session_start();
require_once('dbconnection.php');
if(isset($_POST['signup']))
{
 $username=$_POST['username'];
  $email=$_POST['email'];
  $age=$_POST['age'];
  $gender=$_POST['gender'];
  $password=$_POST['password'];
  $contact=$_POST['contact'];
  $cpassword=$_POST['cpassword'];
  $enc_password=$password;
$sql=mysqli_query($con,"select id from users where email='$email'");
$row=mysqli_num_rows($sql);
if($row>0)
{
  echo "<script>alert('Email id already exist with another account. Please try with other email id');</script>";
} else{
  $msg=mysqli_query($con,"insert into users(username,email,age,gender,password,contact,cpassword) values('$username','$email','$age','$gender','$enc_password','$contact','$cpassword')");

if($msg)
{
  echo "<script>alert('Registered successfully');window.location='index.php';</script>";
}
}
}
?>


<html>

<head>
    <title>signup</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="home.css"> 
    <link rel="stylesheet" type="text/css" href="signup.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #e3f2fd;">
        <a class="navbar-brand" href="#">Health Monitoring</a>
        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item active"><a class="nav-link" class="active" href="home.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php"> User</a></li>
                <li class="nav-item"><a class="nav-link" href="adminlogin.php"> Admin</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
            </ul>
        </div>
    </nav>

   <div>
        <img src="https://recycle.com/wp-content/uploads/2018/05/Sustainable-Wellness-Check-Graphics-01.png"
            style="padding-top:130px;padding-left:100px" width="700" height="300"><br><br><br><br>
        <p style="padding-top:20px;padding-left:100px;font-size: 23px;text-align:left;text-align:justify;text-justify:inter-word;">In this application,it will give employees more power to keep an eye<br> on their health and can provide peace of mind for those managing<br>health conditions remotely. It will helpful to maintain the employees <br>health to prevent from major risk without any occur and continuous<br>monitoring helps to keep track of whole employees health. Record <br>and monitor all activity in real time.</p>
    </div>

    <div class="Registerbox">
        <h2><center>Register</h2><br>
        <div class="register">
            <form name="registration" method="post" action="" enctype="multipart/form-data">
                <div class="form-row">
                    <input type="text" class="text" value="" placeholder="Enter your Name" name="username" required>
                </div>
                <div class="form-row">
                    <input type="text" class="text" value="" placeholder="Enter mail id" name="email" required>
                </div>
                <div class="form-row">
                    <input type="number" class="number" value="" placeholder="Age" name="age" required>
                </div>
                <div class="form-row">
                    <input type="text" class="text" value="" placeholder="Contact Number" name="contact" required>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="gender" value="male"id="male">Male
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="gender" value="female"id="female">Female
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="gender" value="transgender"id="transgender">Transgender
                    </label>
                </div>
                <div class="form-row">
                    <input type="password" class="text" value="" placeholder="Password" name="password" required>
                </div>
                <div class="form-row">
                    <input type="password" class="text" value="" placeholder="Confirm Password" name="cpassword" required>
                </div><br>
                <div class="form-row">
                <input type="reset" class="btn btn-primary" value="  Reset  ">
                <input type="submit" class="btn btn-primary" name="signup"  value=" Signup" >
                </div>
                <a href='index.php'><i class='far fa-hand-point-right'> <b>Loginhere</b></a></i>
                   
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>