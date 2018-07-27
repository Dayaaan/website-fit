<?php

class RegisterController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
    	/*
    	 * Méthode appelée en cas de requête HTTP GET
    	 *
    	 * L'argument $http est un objet permettant de faire des redirections etc.
    	 * L'argument $queryFields contient l'équivalent de $_GET en PHP natif.
    	 */
    }

    public function httpPostMethod(Http $http, array $formFields)
    {

        if ( isset($_POST["submit"]) ) {

            $user = [];

            if ( empty($formFields["lastname"]) ) {

                throw new Exception("Lastname empty");
                
            } else {

                $user["lastname"] = Tools::cleanText($formFields["lastname"]);

            }

            if ( empty($formFields["firstname"]) ) {

                throw new Exception("Firstname empty");
                
            } else {

                $user["firstname"] = Tools::cleanText($formFields["firstname"]);

            }

            if ( empty($formFields["email"]) ) {

                throw new Exception("Email empty");
                
            } else {

                $user["email"] = Tools::cleanText($formFields["email"]);

            }

            if ( empty($formFields["password"]) ) {

                throw new Exception("Password empty");
                
            } else {

                $user["password"] = Tools::cleanText($formFields["password"]);

            }

            if ( empty($formFields["password_confirm"]) ) {

                throw new Exception("Password Confirm empty");

            } else {

                $passwordConfirm = Tools::cleanText($formFields["password_confirm"]);

            }

            $password = $user["password"];


            if ( $password != $passwordConfirm ) {

                return ["errorMessage" => "Mot de passe différent"];

            } else {

                $user["password"] = password_hash($password,PASSWORD_BCRYPT);

            }

            $userModel = new UserModel();

            $userModel->createUser($user);

        }
        
    }
}