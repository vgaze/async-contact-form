<!DOCTYPE HTML>
<html>
	<head>
		<title>violet gaze contact form</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="css/forms.css" />
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
</head>

<body>

<!-- contact form by violet gaze: you supply backend validation -->

<div class="logo">
	<a href="https://violetgazesf.com" target="_blank" class="logo"><img src="VGlogoLT.png" alt="violetgazesf.com" class="logo"></a>
</div>

<div class="ctr topmg">
	<h3>CONTACT FORM BY VIOLET GAZE</h3>
	<p>Asynchronous deployment with Jquery validation and auto refresh.</p>				
	<div class="alert1"><?= $errMSG ?>alert (remove this text)</div>
	<div class="alert2" id="sc">success (remove this text)</div><br />

	<form method="post" action="conparse.php" class="ajax msg" id="con">
		<input type="text" name="name" placeholder="name" required>
		<input type="text" name="subject" placeholder="subject" required>
		<input type="email" name="email" placeholder="email" required/>
		<textarea name="msg" placeholder="message" rows="6" required></textarea>
		<input type="reset" value="Reset" style="text-align:left;" class="reset">
		<button class="send" style="float:right;"><img src="send.png" alt="send"></button>
	</form>
</div>
	<?php include 'valfooter.php';?>
</body>
</html>