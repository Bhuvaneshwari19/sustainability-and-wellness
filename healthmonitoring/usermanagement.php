<?php
include_once 'dbconnection.php';
$result = mysqli_query($con,"SELECT * FROM users");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>usermanagement</title>
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
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
      crossorigin="anonymous"/>
      <link rel="stylesheet" type="text/css" href="home.css">
       <link rel="stylesheet" type="text/css" href="login.css">
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script>
</head>
<body><br><br><br>
     <nav class="navbar navbar-expand-lg fixed-top">
      <ul>
        <li><a href="medicalrecords.php"></i> Back</a></li>
      </ul>
    </nav>
<div class="container">
   <h2><center>User Management</center></h2>
    <table class="table table-fluid" id="myTable">
    <thead>
    <tr><th>Name</th><th>Mail id</th><th>Age</th><th>Gender</th><th>Contact</th></tr>
    </thead>
    <tbody>
    
    

<?php
if (mysqli_num_rows($result) > 0) {
?>
   
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["username"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    <td><?php echo $row["age"]; ?></td>
    <td><?php echo $row["gender"]; ?></td>
    <td><?php echo $row["contact"]; ?></td>
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
});
    </script>
</body>
</html>