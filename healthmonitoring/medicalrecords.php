<?php
include_once 'dbconnection.php';
$result = mysqli_query($con,"SELECT u.username,u.age,u.gender,u.email,m.* FROM medicalrecords m inner join users u on m.UserID = u.id order by Updateddatetime desc");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Data Tables</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="home.css">
  <link rel="stylesheet" type="text/css" href="login.css">
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script>
</head>
<body><br><br><br><br>
<div class="container">
    <nav class="navbar navbar-expand-lg fixed-top">
        <ul>
        <li><a href="admin.php"></i> Back</a></li>
      </ul>
    </nav>
    <h2><center>Medical Records</center></h2>
    <table class="table table-fluid" id="myTable">
    <thead>
    <tr><th>Name</th><th>Gender</th><th>Age</th><th>Temperature</th><th>BP</th><th>Respiration rate</th><th>Glucose</th><th>Heart rate</th><th>Oxygen Saturation</th><th>ECG</th><th>Contact</th></tr>
    </thead>
    <tbody>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<?php
$status=$row['temperature'];
$mailme=$row['email'];
if($status >= 100)
{
    $color="background-color:lightsalmon";
}
 else 
{

    $color="background-color:lightgreen";
}
?>
<?php
$status1=$row['bp'];
if($status1 >= 120)
{
    $color1="background-color:lightsalmon";
}
 else 
{
    $color1="background-color:lightgreen";
}
?>
<?php
$status2=$row['respirationrate'];
if($status2 <12)
{
    $color2="background-color:lightsalmon";
}
 else 
{
    $color2="background-color:lightgreen";
}
?>
<?php
$status3=$row['glucose'];
if($status3 <140)
{
    $color3="background-color:lightgreen";
}
 else 
{
    $color3="background-color:lightsalmon";
}
?>
<?php
$status4=$row['heartrate'];
if($status4 <60)
{
    $color4="background-color:lightsalmon";
}
 else 
{
    $color4="background-color:lightgreen";
}
?>
<?php
$status5=$row['oxygensaturation'];
if($status5 <90)
{
    $color5="background-color:lightsalmon";
}
 else 
{
    $color5="background-color:lightgreen";
}
?>
<?php
$status6=$row['ecg'];
if($status6 <60)
{
    $color6="background-color:lightsalmon";
}
 else 
{
    $color6="background-color:lightgreen";
}
?>

<tr>
   <td ><?php echo $row["username"]; ?></td>
    <td><?php echo $row["age"]; ?></td>
     <td><?php echo $row["gender"]; ?></td>
     
    <td style="<?php echo $color?>"><?php echo $row["temperature"];?></td>
    <td style="<?php echo $color1?>"><?php echo $row["bp"]; ?></td>
    <td style="<?php echo $color2?>"><?php echo $row["respirationrate"]; ?></td>
    <td style="<?php echo $color3?>"><?php echo $row["glucose"]; ?></td>
    <td style="<?php echo $color4?>"><?php echo $row["heartrate"]; ?></td>
    <td style="<?php echo $color5?>"><?php echo $row["oxygensaturation"]; ?></td>
    <td style="<?php echo $color6?>"><?php echo $row["ecg"]; ?></td>
    <td> 
      <a href="mailto:<?php echo $row["email"]; ?> ? target=" _top"= title=""><img style="width: 45px; height: 40px;" src="https://previews.123rf.com/images/andrerosi/andrerosi1905/andrerosi190500178/123158163-mail-vector-icon-e-mail-icon-envelope-illustration-message.jpg"></a></td>
</tr>
<?php
$i++;
}
?>
 <?php
}
else{
    echo "No user found";
}
?>

</tbody>
    </table>
    </div>
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
    </script>
</body>
</html>
