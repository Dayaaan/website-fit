<?php 

Class Tools {

	public static function pre($thing) {
	
		echo "<pre>";

		print_r($thing);

		echo "</pre>";
	} 

	public static function getFormattedDate($dateMysql) {
		
		$timestamp = strtotime($dateMysql);

		return date('d/m/Y H:i:s', $timestamp);
	
	}

	public static function cleanText($text) {

		$text = strip_tags($text);

		$text = trim($text);

		$text = htmlentities($text);

		return $text;
	}

	public static function sendMail($email) {

		$to = "contact@vumartin.fr";

		$subject = "Message ou coaching recu sur votre site";

		$message = "Bonjour , vous venez de recevoir un message sur votre site de coaching privé , vous pouvez visualiser vos message sur le site www.vumartin.fr/ dans la section ADMIN";

		$headers = 'From : contact@vumartin.fr';

		mail($to, $subject, $message, $headers);
		
	}
}