<?php
include_once 'dbconnection.php';
$result = mysqli_query($con,"SELECT count(*) as c FROM users union all Select count(*) as c from users where gender='male' union all Select count(*) as c from users where gender='female'");
 // $row = mysqli_fetch_array($result, MYSQLI_NUM);
 while ($row = mysqli_fetch_array($result,MYSQLI_NUM)) 
 {
  $row_count[] = $row[0];
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
      crossorigin="anonymous"/>
      <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" href="styles.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>ADMIN DASHBOARD</title>
  </head>
  <body>
    <div class="container">
      <nav class="navbar">
        <div class="nav_icon" onclick="toggleSidebar()">
          <i class="fa fa-bars" aria-hidden="true"></i>
        </div>
        <div class="navbar__left">
          <a href="home.php">Home</a>
        </div>
      </nav>

      <main>
        <div class="main__container">
          <div class="main__title">
            <div class="main__greeting">
              <h1><centre>Health Monitoring Report</centre></h1>
            </div>
          </div>
          <div class="main__cards">
            <div class="card">
            <center><i class="fa fa-users fa-2x text-red"></i>
              <div class="card_inner">
                <br><br><p class="text-primary-p">Total Employees</p>
                <span class="font-bold text-title"><?php echo $row_count[0] ?></span>
              </div>
            </div>

            <div class="card">
              <center><i class="fa fa-female fa-2x text-lightblue" aria-hidden="true"></i>
              <div class="card_inner">
                <p class="text-primary-p">Female Employees</p>
                <span class="font-bold text-title"> <?php echo $row_count[2] ?></span>
              </div>
            </div>

            <div class="card">
              <center><i class="fa fa-male fa-2x text-yellow"aria-hidden="true"
              ></i>
              <div class="card_inner">
                <p class="text-primary-p">Male Employees</p>
                <span class="font-bold text-title"> <?php echo $row_count[1] ?>  </span>
              </div>
            </div>
          </div>
          <div class="charts">
            <div class="charts__left">
              <div class="charts__left__title">
                <div>
                  <h1>Medical records</h1><br><br><br>
                  <a href="medicalrecords.php"><center><button class="btn">    View      </button></a><br><br><br>
                <p align:center><b>Continuous health monitored results are used to track the employees health to lead a wellness</b></p>
                </div>
              </div>
              <div id="apex1"></div>
            </div>

            <div class="charts__right">
              <div class="charts__rigth__title">
                <div>
                  <h1>Users Medical Record </h1>
                  <p>Accurate Monitoring</p>
<div id="piechart"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['healthcheck', 'for every 10 mins per Day'],
  ['crtical', 20],
  ['normal', 80],
]);
  var options = {'title':'Monitoring results', 'width':550, 'height':400};
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>

             </div>
            </div>
          </div>
        </div>
      </main>
      <div id="sidebar">
        <div class="sidebar__title">
            <h1>Health Monitoring</h1>
        </div>
         <div class="sidebar__menu">
          <div class="sidebar__link active_menu_link">
            <i class="fa fa-home"></i>
            <a href="admin.php">Dashboard</a>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-users"></i>
            <a href="usermanagement.php">User Management</a>
          </div>
          <div class="sidebar__link">
            <i class="fas fa-book-medical"></i>
            <a href="medicalrecords.php">Medical Records</a>
          </div>
          <div class="sidebar__logout">
            <i class="fa fa-power-off"></i>
            <a href="adminlogin.php">Log out</a>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="script.js"></script>
  </body>
</html>
