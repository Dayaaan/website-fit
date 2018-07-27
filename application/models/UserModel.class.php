<?php 

Class UserModel {

	public function createUser(array $user) {

		$sql = "INSERT INTO user (lastname,firstname,email,password,created_at,updated_at,role) VALUES (:lastname,:firstname,:email,:password,NOW(),NOW(),'guest')";

		$db = new Database();

		$db->executeSql($sql,$user);

	}

	public function getUserByEmail($email) {

		$sql = "SELECT * FROM user WHERE email = ?";

		$db = new Database();

		$userByEmail = $db->queryOne($sql, [$email]);

		return $userByEmail;
	}

    public function getUserById($id) {

        $sql = "SELECT * FROM user WHERE id = ?";

        $db = new Database();

        $userById = $db->queryOne($sql, [$id]);

        return $userById;

    }

    public function saveNewPassword(array $user) {

        $sql = "UPDATE user
                SET password = :password
                WHERE id = :user_id";

        $db = new Database();

        $db->executeSql($sql,$user);


    }


}