              <?php
                //store the message and email in a variable
                $message = $_POST['message'];
                $email = $_POST['email'];
                
                //store the email recipient in a variable
                //$to = "sustainabilityandwellness@gmail.com";
                //Mail Subject
                //$subject = "Mail";
                // store the Mail title in a variable
                //$title = "Mail";
                // store the message in a variable
                //$txt = $message;
                //create email headers, the hidden code on top of all emails, read by the mail client.
                //$headers = "From: $title $email" . "\r\n" .'Reply-To: '.$email."\r\n";
       
                //build your email using the mail method, using the parameters of the variables that you just created in this order...
                //email recipient, email subject, email message, email headers
                //mail($to,$subject,$txt,$headers);

        echo "<script>alert('Thank you for contacting us!!!');window.location='home.php';</script>";
?>