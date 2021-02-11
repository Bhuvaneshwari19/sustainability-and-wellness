<?php
session_start();
include_once 'dbconnection.php';
require_once "Mail\Mail.php";

if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $result = mysqli_query($con,"SELECT * FROM users where email='" . $_POST['email'] . "'");
    $row = mysqli_fetch_assoc($result);
  $fetch_email=$row['email'];
  $password=$row['password'];
  if($email==$fetch_email) {
        $to = $email;

$from = 'sustainabilityandwellness@gmail.com';
$to = $to;
$subject = 'Hi!';
$body = "Your password is:".$password;;
$headers = array(
    'From' => $from,
    'To' => $to,
    'Subject' => $subject
);

$smtp = Mail::factory('smtp', array(
        'host' => 'ssl://smtp.gmail.com',
        'port' => '465',
        'auth' => true,
        'username' => 'sustainabilityandwellness@gmail.com',
        'password' => 'adminhealth@1'
    ));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
    echo('<p>' . $mail->getMessage() . '</p>');
} else {
   echo "<script>alert('Message sent successfully.....Kindly check your inbox');</script>"; 


}
}
}
?>
<html>
<head>
<title>PasswordchangeDesign</title><meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="home.css">
    <link rel="stylesheet" type="text/css" href="forgotpassword.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
        <li><a class="active" href="home.php"> Home</a></li>
        <li><a href="index.php"> Login</i> 
        <li><a href="about.php">About</a></li>
      </ul>
<body>
    <div class="loginbox">
        <h1>Forgot password</h1>
        <form action="" method="post">
            <p>Enter mail</p>
            <input type="text" name="email" placeholder="">
            <input type="submit" name="submit" value="SUBMIT">
        </form>
        
    </div>
     
</body>
</html>