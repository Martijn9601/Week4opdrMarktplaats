<?php 

class Dbh{

	private $servername;
	private $username;
	private $password;
	private $dbname;

	public function connect(){
		$this->servername = "localhost";
		$this->username = "root";
		$this->password = "";
		$this->dbname = "pluginmarket";

		$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
		echo "connected";
		return $conn;
		
	}
}



?>