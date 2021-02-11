<?php
require_once ('Connection.php' );
class EntryClass  {
public function addEntry(){
 
    $link = mysqli_connect("localhost", "root", "", "healthmonitoring");
 
    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
      $sql = "SELECT * FROM users";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            //             echo "<tr>";
            //                 echo "<td>" . $row['id'] . "</td>";
            //                 echo "<td>" . $row['username'] . "</td>";
            //             echo "</tr>";
            //     
    $temperature = rand(95,106);
    $bp = rand(80,120);
    $respirationrate = rand(10, 18);
    $glucose = rand(120,150);
    $heartrate = rand(60,100);
    $oxygensaturation = rand(80,100);
    $ecg = rand(60,100);
    $UpdatedDateTime  = date("Y-m-d h:i:s");
    $UserID    =  $row['id'];
      
    $insert="Insert into medicalrecords (temperature, bp , respirationrate, glucose , heartrate 	,oxygensaturation,ecg,UpdatedDateTime,UserID)  
      values ('$temperature', '$bp' , '$respirationrate', '$glucose' , '$heartrate' 	,'$oxygensaturation','$ecg','$UpdatedDateTime','$UserID')";
    
        if(mysqli_query($link, $insert)){
            echo "Records inserted successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }
  
    }
}

mysqli_close($link);

}}


	 

	 
 
