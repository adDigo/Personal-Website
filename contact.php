<!-- NOTE TO SELF https://blog.mailtrap.io/php-email-contact-form/ --> 
<!DOCTYPE html>
<!--contact.php-->
<html>
<head>
	<link rel="stylesheet" type="text/css" href="overallStyle.css">
</head>
<body>
	<?php include('header.html')?>
	<div class = "container">
		<h1>Contact</h1>
		<form action = "sentSuccess.php" method = "POST" enctype="text/plain">
		
			<div class = "contact-info">
				<label class = "label">Name</label>
				<input type = "text" name = "name" required>
			</div>
			<div class = "contact-info">
				<label class = "label">Email</label>
				<input type = "text" name = "email" required>
			</div>
			<div class = "contact-message">
				<label class = "label2"> Message</label>
				<textarea name = "message" rows = 5 cols = 50 required></textarea>
			</div>
			<input type="submit" value="Send">
	</form>
</div>

	<?php include('footer.html')?>
</body>
</html>




