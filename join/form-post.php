<?php 
if(isset($_POST['email'])){
    $to = "contact@thefreequency.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $subject = "Email update sign-up";
    $message = $from;
    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
}
?>
