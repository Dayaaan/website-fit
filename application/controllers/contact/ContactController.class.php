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

            if ( empty($formFields["lastname"]) ) {

                throw new Exception("Lastname empty");
                
            } else {

                $contactForm["lastname"] = strip_tags($formFields["lastname"]);

            }

            if ( empty($formFields["firstname"]) ) {

                throw new Exception("Firstname empty");
                
            } else {

                $contactForm["firstname"] = strip_tags($formFields["firstname"]);

            }

            if ( empty($formFields["email"]) ) {

                throw new Exception("Email empty");
                
            } else if ( Form::verifEmail($formFields["email"])) {

                $contactForm["email"] = strip_tags($formFields["email"]);

            } else {

                return ["errorMessage" => "Email invalide"]; 

            }

            if ( empty($formFields["message"]) ) {

                throw new Exception("Message empty");
                
            } else {

                $contactForm["message"] = strip_tags($formFields["message"]);

            }

        $contactModel = new ContactModel();

        $contactModel->saveMessageForm($contactForm);

        }
    }
}