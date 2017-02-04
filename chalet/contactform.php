<?php
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->IsSMTP();        // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup server
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'something@gmail.com';                            // SMTP username
$mail->Password = '';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
$mail->Port = 587;                    // set the SMTP port for the GMAIL server

$mail->formemail = $_POST['email'];
$mail->formname = $_POST['name'];

$mail->From = $mail->formemail;
$mail->FromName = $mail->formname;
$mail->AddAddress('something@gmail.com');               // Name is optional

$mail->AddCC('');
$mail->AddBCC('');

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters

$mail->IsHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Colette Apartment Contact Form';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

    $mail->Body = "
    <html>
    <p>".$name.", <br>".$email." <br><br>".$message."</b></p>
    </html>";

$mail->AltBody = '';

if(!$mail->Send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

echo 'Thank you, your message has been sent!';


