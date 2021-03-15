<?php

//Import the PHPMailer class into the global namespace (unmodifed)
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

//set timezone
date_default_timezone_set('Etc/UTC');

require 'PHPMailerTemplate/vendor/autoload.php';

if(!isset($_POST['submit'])) {

	//collect data
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];

    //Create a new PHPMailer instance
    $mail = new PHPMailer;
    //Tell PHPMailer to use SMTP
    $mail->isSMTP();
    //Enable SMTP debugging
    // SMTP::DEBUG_OFF = off (for production use)
    // SMTP::DEBUG_CLIENT = client messages
    // SMTP::DEBUG_SERVER = client and server messages
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
    //Set the hostname of the mail server
    $mail->Host = 'smtp.gmail.com';
    //Set the SMTP port number - likely to be 25, 465 or 587
    $mail->Port = 587;
    //SMTP authentication
    $mail->SMTPAuth = true;

    //Username to use for SMTP authentication
    $mail->Username = 'contact.personal.website@gmail.com';
    //Password to use for SMTP authentication
    $mail->Password = 'PersonalWebsite123';
    //Set who the message is to be sent from
    $mail->setFrom('contact.personal.website@gmail.com');
    //Set an alternative reply-to address
    //$mail->addReplyTo('replyto@example.com', 'First Last');
    //Set who the message is to be sent to email and name
    $mail->addAddress('adrienne.v.digo@gmail.com', 'Adrienne Digo');
    //Name is optional
    //$mail->addAddress('recepientid@domain.com');


    //$mail->addCC("recepient2id@domain.com");
    //$mail->addBCC("recepient3id@domain.com");

    $mail->isHTML(true);

    //Add attachments/files
    //$mail->addAttachment("file.txt", "File.txt");        
    //Filename is optional
    //$mail->addAttachment("images/profile.png"); 

    //Set the subject line
    $mail->Subject = 'Personal Website Contact Form Submission';
    $mail->Body = " 
    <html>
	    <body>
		    <p><strong>Name: </strong>$name</p>
		    <br>
		    <p><strong>Email: </strong>$visitor_email</p>
		    <br>
		    <p><strong>Message: </strong>$message</p>
    </html>
    ";
    //Plain text version using AltBody
    //$mail->AltBody = "This is the plain text version of the email content";

    //send the message, check for errors
    if (!$mail->send()) {
        echo "<script> 
		    alert('Message could not be sent.');
		    </script>";
    } else {
        header("Location:sentSuccess.php"); 
    }

}
?>