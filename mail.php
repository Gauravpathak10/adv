<?php
//get data from form  
$name = $_POST['name'];
$contact= $_POST['contact'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "youremail@mail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message; 
\r\n Contact No =". $contact";
$headers = "From: cmray92@gmail.com" . "\r\n" .
"CC: carboncopy@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>