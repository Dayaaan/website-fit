<?php

class MessageController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
        $userSession = new UserSession();

        $userSession->isAdmin();
        
        $contactModel = new ContactModel();

    	$messages = $contactModel->getAllMessagesForm();

        return ["messages" => $messages];
    }

    public function httpPostMethod(Http $http, array $formFields)
    {
    	/*
    	 * Méthode appelée en cas de requête HTTP POST
    	 *
    	 * L'argument $http est un objet permettant de faire des redirections etc.
    	 * L'argument $formFields contient l'équivalent de $_POST en PHP natif.
    	 */
    }
}