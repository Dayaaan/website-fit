<?php 

Class Tools {

	public static function pre($thing) {
	
		echo "<pre>";

		print_r($thing);

		echo "</pre>";
	} 

	public static function  getFormattedDate($dateMysql) {
		
		$timestamp = strtotime($dateMysql);

		return date('d/m/Y H:i:s', $timestamp);
	
	}

	public static function cleanText($text) {

		$text = strip_tags($text);

		$text = trim($text);

		$text = htmlentities($text);

		$text = htmlspecialchars($text);

		return $text;
	}
}