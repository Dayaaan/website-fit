<?php 

Class CoachingModel {

	public function saveCoaching(array $coaching) {

		$sql = "INSERT INTO coaching_form (lastname,firstname,age,email,gender,weight,height,nb_training,nb_year,other,goal,created_at) VALUES (:lastname,:firstname,:age,:email,:gender,:weight,:height,:nb_training,:nb_year,:other,:goal,NOW())";

		$db = new Database();

		$db->executeSql($sql,$coaching);

	}	
}