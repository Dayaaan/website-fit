<?php

class OnemessageController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {

        $userSession = new UserSession();

        $userSession->isAdmin();

        $id = $queryFields["id"];

        $contactModel = new ContactModel();

        $message = $contactModel->getMessageById($id);

        return ["message" => $message];
        
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