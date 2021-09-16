<?php
//get data from form  
$name = $_POST['Name'];
$email= $_POST['email'];
$number= $_POST['Number'];
$textbox= $_POST['message'];
$to = "snirajsingh678@mail.com";
$subject = "Mail From Nikku website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n   number = " . $number . "\r\n  Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>