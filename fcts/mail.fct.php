<?php
/**
* Send an email
* @return boolean
* @param string Name of the sender
* @param string Email of the sender
* @param string Name of the receiver
* @param string Email of the receiver
* @param string Email subject
* @param string Email HTML content
* @desc Send an email from the sender email to the receiver email
*/	
function sendHtmlEmail($nameSender, $emailSender, $nameReceiver, $emailReceiver, $subject,$htmlContent)
{		
	// Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
	$headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    
    // En-têtes additionnels
    $headers .= 'To: '.$nameReceiver.' <'.$emailReceiver.'>' . "\r\n";
    $headers .= 'From: '.$nameSender.' <'.$emailSender.'>' . "\r\n";
	
	return mail($emailReceiver, $subject, $htmlContent, $headers);
}

/**
* Send an email to the administrator
* @return boolean
* @param string Name of the sender
* @param string Email of the sender
* @param string Name of the receiver
* @param string Email of the receiver
* @param string Email subject
* @param string Email HTML content
* @desc Send an email from the sender email to the admin email
*/	
function sendHtmlEmailToAdmin($nameSender, $emailSender, $subject,$htmlContent)
{	
	return sendHtmlEmail($nameSender, $emailSender, $GLOBALS['adminName'], $GLOBALS['adminEmail'], $subject,$htmlContent);	
}
?>