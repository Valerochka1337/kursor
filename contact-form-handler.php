<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$email_from = "Lolik1337228@gmail.com";

	$email_subject = $subject;

	$email_body = "User name: $name \n".
					"User email: $email \n".
					"User message: $message \n";

	$to = "valerochkayartsev88@gmail.com";

	$headers = "From: $email_from \r\n";

	$headers .= "Reply-To: $email \r\n";

	mail($to, $email_subject, $email_body, $headers);

	header("Location: index.html");



?>
