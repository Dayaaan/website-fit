<?php 

Class UserSession {

	public function start() {

		session_start();
	}

	public function connect($user) {

		$_SESSION['auth']['user_id'] = $user['id'];

		$_SESSION['auth']['role'] = $user['role'];

	}

	public function logout() {
		
		session_destroy();
	}

	public function isConnected() {

		if ( empty($_SESSION['auth']['user_id']) && empty($_SESSION['auth']['role']) ) {

			return false;

		} else {

			return true;
		}
	}

	//Si il n'est pas connecté on le redirige vers la page forbidden 

	public function isNotAdmin() {

		if ( empty($_SESSION['auth']) ) {

			$http = new Http();

			$http->redirectTo('Forbidden');

			exit;

		}

		if ( $_SESSION['auth']['role'] == 'guest' ) {

			$http = new Http();

			$http->redirectTo('Forbidden');

			exit;
		}

	}

}