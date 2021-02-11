<?php
session_start();
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{
  
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HomepageDesign</title>
    <link rel="stylesheet" href="home.css">
    <link type="text/css" rel="stylesheet" href="css/contactform.css">   
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
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
        <li><a href="#"><i class="fa fa-fw fa-user" style='color:black'></i> 
          <?php echo $_SESSION['name'];?></a></li>
          <li><a href="about.php">About</a></li>
        <li><a href="logout.php"> Logout</a></li>
      </ul>
    </nav><br><br>
<style>
img {
  float:left;
  margin: 0px 0px 15px 40px;
}
div {
  text-align: justify;
  text-justify: inter-word;
  font-size: 20px;
}
</style>
<br><br>
<p><img src="http://www.webdevitsolutions.com/images/hmp/TechDesk-Hospital-Management.png" width="700" height="500"></p>
<br><br><div>The health monitoring system is employed as the method to measure the observation data.The experimental modal analysis is one of the effective health monitoring systems for the case where the modal parameters such as natural frequencies are adopted as the observations.Health monitoring is very important in terms of prevention, particularly if the early detection of diseases can reduce suffering and medical costs. The diagnosis and prompt treatment of various diseases can radically improve alternatives for the medical treatment of the patient.Easy to identify and any risk to avoid danger if any happen.</div>
<!--<div id="mybutton">
       <button class="chatbutton" onclick="window.location.href='bot.php';"><i class="fa fa-comments"></i>Chat With Us</button>
    </div>-->
  
 <img src="https://e7.pngegg.com/pngimages/405/432/png-clipart-messenger-icon-blue-symbol-apple-messages-blue-conversation-thumbnail.png" class="chatOn" onclick="openForm()">

       <div class="chat-popup" id="myForm">
           <form action="send.php" method="post" class="popup-form">
              <br>
               <label for="name"><b>Name</b></label><br>
               <input type="text" placeholder="Your name" name="username" required><br>
               <label for="email"><b>Email</b></label><br>
               <input type="text" placeholder="Your email" name="email" required><br>
               <label for="Messages"><b>Messages</b></label><br>
               <textarea placeholder="Your Messages" name="message" required></textarea><br>
               <button type="submit" class="button">Send</button>

               <button type="button" class="button chatOff" onclick="closeForm()">Close</button>
           </form>
       </div>

       <script>
           function openForm() {
               document.getElementById("myForm").style.cssText = "display: block;";
           }

           function closeForm() {
               document.getElementById("myForm").style.cssText = "display: none;";
           }
       </script>

</div>
</body>
</html>
<?php } ?>