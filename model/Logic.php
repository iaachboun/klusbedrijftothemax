<?php
require_once 'model/DataHandler.php';

class Logic {

	public function __construct() {
		$this->DataHandler = new Datahandler('localhost','mysql' ,'klusbedrijftothemax' ,'root' ,'');
	}

	public function readContacts(){
		$sql = 'SELECT * FROM bestelling';
		$results = $this->DataHandler->readsData($sql); 
		return $results;
	}


}
