<?php
	if (empty($_POST['name_7517']) && strlen($_POST['name_7517']) == 0 || empty($_POST['email_7517']) && strlen($_POST['email_7517']) == 0 || empty($_POST['message_7517']) && strlen($_POST['message_7517']) == 0)
	{
		return false;
	}
	
	$name_7517 = $_POST['name_7517'];
	$email_7517 = $_POST['email_7517'];
	$message_7517 = $_POST['message_7517'];
	
	// Create Message	
	$to = 'receiver@yoursite.com';
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n Name_7517: $name_7517 \nEmail_7517: $email_7517 \nMessage_7517: $message_7517 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\r\n";
	$headers .= "Reply-To: $email_7517";

	// Post Message
	if (function_exists('mail'))
	{
		$result = mail($to,$email_subject,$email_body,$headers);
	}
	else // Mail() Disabled
	{
		$error = array("message" => "The php mail() function is not available on this server.");
	    header('Content-Type: application/json');
	    http_response_code(500);
	    echo json_encode($error);
	}	
?>