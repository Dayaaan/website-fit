<?php 

Class Form {

	public static function verifPassword($password) {
 
        if ( preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{6,}$#', $password) ) {
            
            return true;
        }
        
        else {

            return false;
        }
    }	

    public static function verifEmail($email) {

        if ( filter_var($email, FILTER_VALIDATE_EMAIL) ) {

            return true;

        } else {

            return false;

        }
    }

    public static function verifName($name) {

        if ( preg_match("/^([a-zA-Z' ]+)$/",$name) ) {

            return true;

        } else {

            return false;

        }
    }
}