<?php 

	function login_user($user){
		$conn = connect();
		$sql = "SELECT * FROM user WHERE email = '$user[email]' AND password = '$user[password]'";
		$result = $conn ->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        //opslaan user data
		        session_start();
		        $_SESSION['user_id'] = $row['id'];
		        //redirect to dashboard
		        header('Location: ./pages/dashboard.php');
		    }
		} 
		else {
		    echo "No result";
		}

		$conn -> close(); 
	}

	function get_users(){
		
		$conn = connect();
		$sql = "SELECT * FROM user";
		$result = $conn ->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        echo "id: " . $row["id_users"]. " - Name: " . $row["first_name"]. " " . $row["last_name"]. "<br>";
		    }
		} 
		else {
		    echo "No result";
		}

		$conn -> close(); 
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