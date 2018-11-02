<?php 

class Dbh{

	private $servername;
	private $username;
	private $password;
	private $dbname;

	protected function connect(){
		$this->servername = "localhost";
		$this->username = "root";
		$this->password = "";
		$this->dbname = "pluginmarket";

		$conn = new msqli($this->servername, $this->username, $this->password, $this->dbname);
		return $conn;
	}
}


	function register_user($user){

		log_data(json_encode($user));

		$conn = connect();
			$sql = "INSERT INTO `user` (
				 `firstname`,  
				 `lastname`, 
				 `dateofbirth`, 
				 `email`, 
				 `password`) 
				VALUES (
				 '$user[firstname]',
				 '$user[lastname]',
				 '$user[dateofbirth]',
				 '$user[email]',
				 '$user[password]'
				)";

		if ($conn->query($sql) === TRUE) {
	    	echo "You have been registered";
		} else {
	    	echo "Could not register user. Error: " . $conn->error;
		}
		$conn -> close(); 

	}

?>