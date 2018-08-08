<?php

Class SessionFilter implements InterceptingFilter {

	public function run(Http $http, array $queryFields, array $formFields) {

		// session start

		$userSession = new UserSession();

		$userSession->start();

		// affiche erreur sur mac 
		
		ini_set('display_errors', 1); 

	}
}