<?php

	require_once "../vendor/autoload.php";

	//PHPMailer Object
	$mail = new PHPMailer;

	//From email address and name
	$mail->From = "jersonmartinezsm@gmail.com";
	$mail->FromName = "Jerson A. Martínez M.";

	//To address and name
	$mail->addAddress("sidemasterdelfuturo@gmail.com", "Side Master");
	$mail->addAddress("sidemasterdelfuturo@gmail.com"); //Recipient name is optional

	//Address to which recipient will reply
	$mail->addReplyTo("respondeaqui@domain.com", "Responder");

	//CC and BCC optional.
	$mail->addCC("cc@example.com");
	$mail->addBCC("bcc@example.com");

	//Send HTML or Plain Text email
	$mail->isHTML(true);

	$mail->Subject = "Prueba de Mensajería";
	$mail->Body = "<i>Adding new text in the body of is message</i>";
	$mail->AltBody = "This is the plain text version of the email content";

	if(!$mail->send())
	    echo "Mailer Error: " . $mail->ErrorInfo;
	else 
	    echo "Message has been sent successfully";
?>