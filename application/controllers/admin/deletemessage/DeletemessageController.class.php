<?php

class DeletemessageController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
        $userSession = new UserSession();

        $userSession->isNotAdmin();

        $id = $queryFields["id"];

        $contactModel = new ContactModel();

        $contactModel->deleteMessageById($id);

        $http->redirectTo('Admin/Message');
        
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