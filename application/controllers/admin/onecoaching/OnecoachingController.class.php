<?php

class OnecoachingController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
        $userSession = new UserSession();

        $userSession->isAdmin();

        $id = $queryFields["id"];

        $coachingModel = new CoachingModel();

        $coaching = $coachingModel->getCoachingById($id);

        return ["coaching" => $coaching, "_raw_template" => true];
        
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