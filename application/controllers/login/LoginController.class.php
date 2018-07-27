<?php

class LoginController
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

        if ( empty($formFields['email'])) {

            throw new Exception("Email empty");

        }

        if ( empty($formFields['password'])) {

            throw new Exception("Password empty");

        }

        $email = $formFields['email'];

        $password = $formFields['password'];

    	$userModel = new UserModel();

        $user = $userModel->getUserByEmail($email);


        if ( empty($user) ) {

            return ["errorMessage" => "Email inconnu"];
        }

        if ( password_verify($password, $user["password"]) ) {

            $userSession = new UserSession();

            $userSession->connect($user);

            $flashBag = new FlashBag();

            $flashBag->add("Bienvenue dans votre espace administration");

            $http->redirectTo('Admin');

        } else {

            return ['errorMessage' => 'Mot de passe incorrect'];
        }
    }
}