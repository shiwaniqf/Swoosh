<?php
    include '../conn.php';

    if(!empty($_POST["contactsubmit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $subject = $_POST["subject"];
    $message = $_POST["msg"];

    $mailto = "info@swoooshindia.com";  //My email address
    //getting customer data
    $fromEmail = $_POST['email']; //getting customer email
    $subject_me = "Thank You for connect - Swooosh India"; // For customer confirmation
    $subject_cus  = "Swooosh :".$subject." Inquiry Received"; //getting subject line from client   
    
    //Email body I will receive
    $message1 = "Swooosh Contact Us Page - Details of ".$name."\n
------------------------------------
\n
Client Name: " . $name . "\nClient phone No: " . $phone . "\nClient Email: ". $email . "\nClient Subject: ".$subject."\nMessage From Client: ".$message;
        
    //Message for client confirmation
    $message2 = "Thank you for contacting us. We Received Your Inquiry For ".$subject."\nWe will get back to you shortly! - Swooosh India";
    
    //Email headers
    $headers = "From: " . $fromEmail; // Client email, I will receive
    $headers2 = "From: " . $mailto; // This will receive client
     
    $result1 = mail($mailto, $subject_cus, $message1, $headers); // This email sent to My address
    $result2 = mail($fromEmail, $subject_me, $message2, $headers2); //This confirmation email to client
        
    $sql="INSERT INTO contact_us (name, email, contact,subject, message) VALUES ('".$name."','".$email."', '".$phone."', '".$subject."', '".$message."')";

    if(!$result = $conn->query($sql)){
        die('There was an error running the query [' . $conn->error . ']');
    }
    else
    {
        if ($result1 && $result2) {
            $msg = "Your Message was sent Successfully!";
        } else {
            $msg = "Sorry! Message was not sent, Try again Later.";
        }

        header("Location:../contactus.php?msg=".$msg);
    }
}
    // require_once "contact-view.php";
?>
