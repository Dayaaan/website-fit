<?php

class ContactController
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

            $contactForm = [];

            $errorMessage = [];

            if ( empty($formFields["lastname"]) ) {

                throw new Exception("Lastname empty");
                
            } else {

                if ( Validate::verifName($formFields["lastname"]) ) {

                    $contactForm["lastname"] = strip_tags($formFields["lastname"]);

                } else {

                    return ["errorMessage" => "Nom Invalide"];  

                }

            }

            if ( empty($formFields["firstname"]) ) {

                throw new Exception("Firstname empty");
                
            } else {

                if ( Validate::verifName($formFields["firstname"]) ) {

                    $contactForm["firstname"] = strip_tags($formFields["firstname"]);

                } else {

                    return ["errorMessage" => "Prénom Invalide"];  

                }

            }

            if ( empty($formFields["email"]) ) {

                throw new Exception("Email empty");
                
            } else {

                if ( Validate::verifEmail($formFields["email"]) ) {

                    $contactForm["email"] = strip_tags($formFields["email"]);

                } else {

                    return ["errorMessage" => "Email Invalide"]; 

                }
            }

            if ( empty($formFields["message"]) ) {

                throw new Exception("Message empty");
                
            } else {

                $contactForm["message"] = strip_tags($formFields["message"]);

            }

        $contactModel = new ContactModel();

        $contactModel->saveMessageForm($contactForm);

        return ["successMessage" => "Votre message a bien été envoyé"];

        }
    }
}