<?php 

Class ContactModel {

	public function saveMessageForm(array $contactForm) {

		$sql = "INSERT INTO contact_form (lastname,firstname,email,message,created_at) VALUES (:lastname,:firstname,:email,:message,NOW())";

		$db = new Database();

		$db->executeSql($sql,$contactForm);
	}

	public function getAllMessagesForm() {

		$db = new Database();

		$sql = "SELECT * FROM contact_form";

		$messages = $db->query($sql);

		return $messages;
	}

    public function getMessageById($id) {

        $db = new Database();

        $sql = "SELECT * FROM contact_form WHERE id = ?";

        $message = $db->queryOne($sql,[$id]);

        return $message;

    }

    public function deleteMessageById($id) {

        $db = new Database();

        $sql = "DELETE FROM contact_form WHERE id = ?";
        
        $db->executeSql($sql,[$id]);

    }


}