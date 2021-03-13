<!DOCTYPE html>
<!--sentSuccess.php-->
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="overallStyle.css">
</head>
<body>
	<?php include('header.html') ?>

	<?php
		if(!isset($_POST['submit']))

		//collect data
		$name = $_POST['name'];
		$visitor_email = $_POST['email'];
		$message = $_POST['message'];

		$email_from = "adrienne.v.digo@gmail.com";
		$email_subject = "*IMPORTANT*: Form Submission from Personal Website";
		$email_body = "You have recieved a new message from: $name. \n". 
					"Their email address is: $visitor_email\n". 
					"Below is their message:\n $message".
		$to = "adrienne.v.digo@gmail.com";
		$headers = "From: $visitor_email \r\n";
		
		mail($to, $email_subject, $email_body, $headers); ?>
		
	<div id = "success-wrapper">
		<h2 class="sent-message">Your message has been sent successfully.</h2>
		<h3 class = "sent-message">Thank you</h3>
		<div id = "sent-message-link"><h4 class ="sent-message"> <a href = "home.php">Back to home</a></h4></div>
	</div>

		






	<?php include('footer.html') ?>
</body>
</html>
