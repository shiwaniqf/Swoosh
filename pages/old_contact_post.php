<?php
    include '../conn.php';

    if(!empty($_POST["contactsubmit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $subject = $_POST["subject"];
    $message = $_POST["msg"];

    // $toEmail = "varsha.qf@gmail.com";
    // $mailHeaders = "From: " . $name . "<". $email .">\r\n";
    // if(mail($toEmail, $subject, $message, $mailHeaders)) {
    //     $msg = "Your contact information is received successfully.";
    //     $type = "success";
    // }

    $sql="INSERT INTO contact_us (name, email, contact,subject, message) VALUES ('".$name."','".$email."', '".$phone."', '".$subject."', '".$message."')";

    if(!$result = $conn->query($sql)){
        die('There was an error running the query [' . $conn->error . ']');
    }
    else
    {
        $msg = "Thank you! We will contact you soon.";
        // echo $_SESSION['success_message'];
        // exit;
        header("Location:../contactus.php?msg=".$msg);
    }
}
    // require_once "contact-view.php";
?>
