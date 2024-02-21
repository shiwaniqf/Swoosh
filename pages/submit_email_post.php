<?php
     if(isset($_POST['submit'])){

        $mailto = "info@swoooshindia.com";  //My email address
        //getting customer data
        $fromEmail = $_POST['email']; //getting customer email
        $subject = "Confirmation: Message was submitted successfully"; // For customer confirmation
        $subject2  = "Swooosh Mail Configuration"; //getting subject line from client
        
        //Email body I will receive
        $message = "Client Email: " . $fromEmail;
        
        //Message for client confirmation
        $message2 = "Thank you for subscribe us. \n We will keep you updated with latest update.\n - Swooosh india";
        
        //Email headers
        $headers = "From: " . $fromEmail; // Client email, I will receive
        $headers2 = "From: " . $mailto; // This will receive client
        
        //PHP mailer function
        
          $result1 = mail($mailto, $subject, $message, $headers); // This email sent to My address
          $result2 = mail($fromEmail, $subject2, $message2, $headers2); //This confirmation email to client
        
          //Checking if Mails sent successfully
        
          if ($result1 && $result2) {
            $success = "Your Message was sent Successfully!";
            echo $success;
          } else {
            $failed = "Sorry! Message was not sent, Try again Later.";
            echo $failed;
          }
    }
?>