<?php
add_header Allow "GET, POST, HEAD" always;
if ( $request_method !~ ^(GET|POST|HEAD)$ ) {
	return 405;
}
//get data from form

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];

$to = "kiloswilliams@gmail.com";
$subject = "Mail From AlexandriaStudios";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@AlexandriaStudios.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
