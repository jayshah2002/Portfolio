<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $msg=$_POST['message'];

$to = "jaykshah2002@gmail.com";
$subject = "Feedback Form:";
$message = "Name: ".$name."<br>"."Mobile No.".$mobile."<br>"."Feedback given is written below: "."<br><br>".$msg;

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@example.com>' . "\r\n";
//$head
if(mail($to,$subject,$message,$headers)){
    echo "<h2>Thank you for visiting my website!!Your Response is successfully send.Thanks for you opinion..</h2>";
}
else{
    echo "Something went wrong";
}
}
?>