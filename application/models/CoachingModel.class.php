<?php 

Class CoachingModel {

	public function saveCoaching(array $coaching) {

		$sql = "INSERT INTO coaching_form (lastname,firstname,age,email,gender,weight,height,nb_training,nb_year,other,goal,created_at) VALUES (:lastname,:firstname,:age,:email,:gender,:weight,:height,:nb_training,:nb_year,:other,:goal,NOW())";

		$db = new Database();

		$db->executeSql($sql,$coaching);

	}
	
	public function getAllCoachings() {

		$db = new Database();

		$sql = "SELECT * FROM coaching_form";

		$coachings = $db->query($sql);

		return $coachings;

	}

	public function getCoachingById($id) {

        $db = new Database();

        $sql = "SELECT * FROM coaching_form WHERE id = ?";

        $coaching = $db->queryOne($sql,[$id]);

        return $coaching;

    }

    public function deleteCoachingById($id) {

        $db = new Database();

        $sql = "DELETE FROM coaching_form WHERE id = ?";
        
        $db->executeSql($sql,[$id]);

    }
}