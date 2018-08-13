<?php

class CoachController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
        
        $userSession = new UserSession();

        $userSession->isAdmin();
        
        $coachingModel = new CoachingModel();

    	$coachings = $coachingModel->getAllCoachings();

        return ["coachings" => $coachings];
        
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