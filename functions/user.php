<?php 

class User{

	private $firstname;
	private $lastname;
	private $dateofbirth;
	private $email;
	private $password;
	public $conn;

	function __construct($firstname, $lastname, $dateofbirth, $email, $password, $conn){
		$this->firstname = $firstname;
		$this->lastname = $lastname;
		$this->dateofbirth = $dateofbirth;
		$this->email = $email;
		$this->password = $password;
		$this->conn = $conn;
	}

	public function register(){
		
		$sql = "INSERT INTO user(firstname, lastname, dateofbirth, email, password) VALUES ('$this->firstname', '$this->lastname', '$this->dateofbirth', '$this->email', '$this->password')";

		if ($this->conn->query($sql) === true) {
	    	echo "You have been registered";
		} else {
	    	echo "Could not register user. Error: " . $this->conn->error;
		}
		$this->conn -> close(); 

	}
}


?>