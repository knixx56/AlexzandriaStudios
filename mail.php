<?php
//get data from form

$name = $_POST['name'];
$email= $_POST['email'];
$radio=$_POST['art';]
$message= $_POST['message'];

$to = "kiloswilliams@gmail.com";
$subject = "Mail From AlexandriaStudios";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Art = " . $radio .
 "\r\n Message =" . $message;
$headers = "From: noreply@AlexandriaStudios.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>