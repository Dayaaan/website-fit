<?php 

Class Validate {

	public static function verifPassword($password) {
 
        if ( preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{6,}$#', $password) ) {
            
            return true;
        }
        
        else {

            return false;
        }
    }

    public static function verifEmail($email) {

        if (preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $email)) {

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

    public static function verifAge($age) {
        if ( is_int($age) ) {

            return true;

        } else {

            return false;

        }
    }
}