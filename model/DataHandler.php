<?php
class DataHandler{
	private $host;
	private $dbdriver;
	private $dbname;
	private $username;
	private $password;

	public function __construct($host, $dbdriver, $dbname, $username, $password)
	{
		$this->host = $host;
		$this->dbdriver = $dbdriver;
		$this->dbname = $dbname;
		$this->username = $username;
		$this->password = $password;

		try {
			$this->dbh = new PDO("$this->dbdriver:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
			$this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return true;
		} catch (PDOException $e) {
			echo "Connection with ".$this->dbdriver." failed: ".$e->getMessage();
		}
	}

	public function __destruct()
	{
		$this->dbh = null;
	}

	public function createData($sql){
		$this->dbh->query($sql);
		// return $this->lastInsertId();
	}

	public function readData($sql){
		return $this->dbh->query($sql);
		// return $this->sth->fetch(PDO::FETCH_ASSOC);
	}
	public function readsData($sql){
		return $this->dbh->query($sql);
	}

	public function updateData($sql){
		$this->dbh->query($sql);
		// return $this->rowCount();
	}
	public function deleteData($sql){
		$this->dbh->query($sql);
		// return $this->rowCount();
	}
}
?>
