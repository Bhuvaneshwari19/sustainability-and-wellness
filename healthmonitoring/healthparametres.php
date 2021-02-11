<?php
session_start();
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{
  
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="home.css">
    <link rel="stylesheet" type="text/css" href="healthparameter.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <a class="navbar-brand logo" href="#">
            <span class="tie">Health Monitoring</span>
        </a>
        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item active"><a class="nav-link" class="active" href="home.php">
                        Home </a></li>
               <li class="nav-item active"><a class="nav-link" class="active" href="signup.php"><i class="fa fa-fw fa-user" style='color:black'></i> 
          <?php echo $_SESSION['name'];?></a></li>
        <li><a class="nav-link" class="active" href="logout.php"> Logout</a></li>
            </ul>
        </div>
    </nav><br><br><br><br><br><br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="tile job">
                    <div class="body">
                        <div class="title">Body Temperature</div>
                    </div>
                    <div class="header">
                        <div class="count">96</div>
                        <div class="title">Normal : <99</div>
                    </div>
                </div>
                <div class="tile job">
                  <div class="body">
                        <div class="title">Blood Pressure</div>
                    </div>
                    <div class="header">
                        <div class="count">120</div>
                        <div class="title">Normal : 80-120</div>
                    </div>
                </div>
                <div class="tile job">
                  <div class="body">
                        <div class="title">Respiration rate </div>
                    </div>
                    <div class="header">
                        <div class="count">14</div>
                        <div class="title">Normal:12-16</div>
                    </div>
                </div>
              </div>
              <div class="col-6">
                <div class="tile job">
                    <div class="body">
                        <div class="title">Glucose rate</div>
                    </div>
                    <div class="header">
                        <div class="count">130</div>
                        <div class="title">Normal : <140</div>
                    </div>
                </div>
                <div class="tile job">
                    <div class="body">
                        <div class="title">Heart rate</div>
                    </div>
                    <div class="header">
                        <div class="count">80</div>
                        <div class="title">Normal :60-100</div>
                    </div>
                  </div>
                   <div class="tile job">
                    <div class="body">
                        <div class="title">Oxygen saturation</div>
                    </div>
                    <div class="header">
                        <div class="count">95%</div>
                        <div class="title">Normal :95%</div>
                    </div>
                  </div>
                  <div class="tile job">
                    <div class="body">
                        <div class="title">ECG</div>
                    </div>
                    <div class="header">
                        <div class="count">80</div>
                        <div class="title">Normal :60-120</div>
                    </div>
                  </div>
                   <div class="tile job">
                      <center><button type="button" class="btn btn-primary" onclick="window.location.href='#';">    Sync device   </button><br><br><br>
                        <p><b><center>Sync your wearable devices<br>To get the health status</center></b></p>
        </div>
    </div>
</body>
</html>
<?php } ?>