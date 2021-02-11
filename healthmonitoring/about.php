<?php
session_start();
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{
  
?>
<!DOCTYPE html>
<html>
<head>
<title>contactus</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="home.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

.navbar {
  width: 100%;
  background-color:#fff;
  overflow: auto;
}

.navbar a {
  float: left;
  padding: 8px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background-color:#8E44AD ;
}

.active {
  background-color:#AED6F1 ;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}
</style>
<body>
<nav>
      <div class="logo">
         <h4>Health Monitoring</h4>
     </div>
      <input type="checkbox" id="click">
      <label for="click" class="menu-btn">
        <i class="fas fa-bars"></i>
      </label>
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="signup.php"><i class="fa fa-fw fa-user" style='color:black'></i> 
          <?php echo $_SESSION['name'];?></a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </nav>
<h1><center>Health Monitoring</center></h1><br><br><br><br>
<h2 style='color:black'><center>To monitor the health
impacting parameters like Body Temperature, Blood Pressure, Respiration, Glucose, Heart
Rate, Oxygen Saturation, Electro Cardiogram etc in the organization to prevent from any major risk occur.By using this health monitoring all the employees in organization easily monitored to know about their health status and act according to that.
Any critical values in any one of the parameters is considered to be putting that particular
person is not health conscious.After this progression from health monitoring required steps are to be taken.</center>
</h2><br><br><br><br>
<h3 style='color:darkcyan'><center><i class="material-icons" style="font-size:40px">email</i></h3>
<h3 style='color:darkcyan'><center>sustainabilityandwellness@gmail.com</center></h3>
</body>
</html>
<?php } ?>