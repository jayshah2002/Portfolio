<?php
$to="jaykshah2002@gmail.com";
$subject = "Hello from XAMPP!";
$message = "This is a first test";
$headers = "From: your@email-address.com\r\n "
if(mail($to, $subject, $message, $headers)) {
echo "SUCCESS";
} else {
echo "ERROR";
}
?>