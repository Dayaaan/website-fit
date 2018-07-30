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

                if ( Validate::verifName($formFields["lastname"]) ) {

                    $user["lastname"] = Tools::cleanText($formFields["lastname"]);

                } else {

                    return ["errorMessage" => "Nom Invalide"];  

                }
            }

            if ( empty($formFields["firstname"]) ) {

                throw new Exception("Firstname empty");
                
            } else {

                if ( Validate::verifName($formFields["firstname"]) ) {

                    $user["firstname"] = Tools::cleanText($formFields["firstname"]);

                } else {

                    return ["errorMessage" => "Prénom Invalide"];  

                }

            }

            if ( empty($formFields["email"]) ) {

                throw new Exception("Email empty");
                
            } else {

                if ( Validate::verifName($formFields["email"]) ) {

                    $user["email"] = Tools::cleanText($formFields["email"]);

                } else {

                    return ["errorMessage" => "Email Invalide"];  

                }               

            }

            if ( empty($formFields["password"]) ) {

                throw new Exception("Password empty");
                
            } else {

                if ( Validate::verifPassword($formFields["password"]) ) {

                    $user["password"] = Tools::cleanText($formFields["password"]);

                } else {

                    return ["errorMessage" => "Votre mot de passe doit comporter des majuscules, des chiffres et plus de 6 caractères"];  

                }  

            }

            if ( empty($formFields["password_confirm"]) ) {

                throw new Exception("Password Confirm empty");

            } else {

                if ( Validate::verifPassword($formFields["password_confirm"]) ) {

                    $user["password"] = Tools::cleanText($formFields["password_confirm"]);

                } else {

                    return ["errorMessage" => "Votre mot de passe doit comporter des majuscules, des chiffres et plus de 6 caractères"];  

                }  

            }

            $password = $user["password"];


            if ( $password != $passwordConfirm ) {

                return ["errorMessage" => "Mot de passe différent"];

            } else {

                $user["password"] = password_hash($password,PASSWORD_BCRYPT);

            }

            $userModel = new UserModel();

            $userModel->createUser($user);

            return ["successMessage" => "Votre compte a bien été cré"];

        }
        
    }
}