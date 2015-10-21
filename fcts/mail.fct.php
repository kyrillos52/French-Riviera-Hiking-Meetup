<?php
/**
* @return boolean
* @param string
* @desc Envoie un mail
*/	
function envoyermail($nom_em, $email_em, $email_dest, $objet,$corps)
{
	require("phpgmailer/class.phpgmailer.php");
	
	$mail = new PHPGMailer();
	$mail->Username = 'info@cyril-grandjean.fr'; 
	$mail->Password = 'hlyg8q';
	$mail->From = $email_em; 
	$mail->FromName = $nom_em;
	$mail->Subject = $objet;
	$mail->AddAddress($email_dest);
	$mail->AddReplyTo($email_em,"Contact");
	$mail->Body = $corps;
	if(!$mail->Send())
	{
	   echo "Le message n'a pas pu être envoyé<br/ >";
	   echo "Mailer Error: " . $mail->ErrorInfo;
	   
	   return false;
	}
	return true;
}
?>