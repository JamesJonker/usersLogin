<?php 

include('database_connection.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


require 'C:\xampp\composer\vendor\autoload.php';

require 'C:\xampp\htdocs\usersLogin\composer\vendor\phpmailer\phpmailer\src/Exception.php';
require 'C:\xampp\htdocs\usersLogin\composer\vendor\phpmailer\phpmailer\src/PHPMailer.php';
require 'c:\xampp\htdocs\usersLogin\composer\vendor\phpmailer\phpmailer\src/SMTP.php';


if(isset($_POST['sendmail'])){


}

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPDebug = 1;
    $mail->Host = 'sandbox.smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 2525;
    $mail->Username = '7baf2bd43d95e1';
    $mail->Password = 'c8ae1676554166';
    
    
    $mail->setFrom('jonker.james@gmail.com', 'James');
    $mail->addAddress('jonker.james@gmail.com', 'Receiver Name');
    $mail->Subject = 'Information has been added';
    $mail->Body = 'This e-mail serves to inform you that your information has been added to our database';
    
    if (!$mail->send()) { 
        echo 'Mailer Error: ' . $mail->ErrorInfo; 
        } else { 
            echo json_encode(true);
        };

?>