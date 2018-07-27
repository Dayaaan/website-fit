<?php

class SessionFilter implements InterceptingFilter {

	public function run(Http $http, array $queryFields, array $formFields) {

		$userSession = new UserSession();

		$userSession->start();

	}
}