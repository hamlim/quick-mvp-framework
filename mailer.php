<?php
	$to = "productmanager@doma.in";
	$subject = "A new signup for [product]";
	$message = $_POST["email"] . " is requesting that you add them to be emailed when you launch!";
	$messagefixed = wordwrap($message, 70);
	$headers = 'From: productmanager@example.com' . "\r\n" . 'Reply-To: productmanager@example.com' . "\r\n". 'X-Mailer: PHP/' . phpversion();
	if(mail($to, $subject, $messagefixed, $headers)){
		header('Location: index.html');
	} else {
		echo "ERROR!";
	};
	
	
?>