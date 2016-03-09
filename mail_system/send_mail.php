<?php


require_once('class.phpmailer.php');
require_once('class.smtp.php');


                             // Enable verbose debug output
$mail = new PHPMailer();                                     // Set mailer to use SMTP\
$mail->IsSMTP();
$mail->SMTPDebug = 3;
$mail->SMTPAuth = true;
$mail->Host = "smtp.gmail.com";
$mail->Port = 587;
$mail->Username = "andreasfrangou3@gmail.com";
$mail->Password = "katiaapanotou";

$mail->SetFrom('andreasfrangou3@gmail.com', 'Web App');
$mail->Subject = "A Transactional Email From Web App";
$mail->MsgHTML("dcdcdcdccdcddcdccddcd");
$mail->AddAddress("pavlides_13@hotmail.com", "Andreakis");

if($mail->Send()) {
    echo "Message sent!";
} else {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
?>