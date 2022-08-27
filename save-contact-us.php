<?php
if(isset($_POST['submit'])){
    $to = "info@arkatechi.com"; // this is your Email address

    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name']; 
    $phone = $_POST['phone'];
    $subject = "Enquiry";
    $message = "Name: ".$name . "\nEmail: " .$from.  "\nContact: " .$phone. "\nMessage: " . $_POST['message'];
    $headers = "From:" . $from;

    mail($to,$subject,$message,$headers);

    $subject2 = "Auto response";
    $message2 = " Hello ".$name.",\n\nThank you so much for reaching out! Our counselor will response to it as soon as possible.\nThis auto-reply mail.\nResponse will be given within a couple of hours if your mail reach us on weekdays Mon-Fri between 10am-8pm. \nAfter office hours and weekends mail reply will be given on next working day.\nWe look forward to assist soon!!!\n\nCheers, ArkaTechi.";  
    $headers2 = "From:" . $to;   
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    header('Location: contact-us.php');
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>
