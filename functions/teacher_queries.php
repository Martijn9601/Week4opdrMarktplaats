<?php

	function register_teacher($user){

		log_data(json_encode($user));

		$conn = connect();
			$sql = "INSERT INTO `student` (
				 `firstname`, 
				 `middlename`, 
				 `lastname`, 
				 `dateofbirth`, 
				 `email`, 
				 `gender`, 
				 `password`) 
				VALUES (
				 '$user[firstname]',
				 '$user[middlename]',
				 '$user[lastname]',
				 '$user[dateofbirth]',
				 '$user[email]',
				 '$user[gender]',
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