<?php
	/**
 *	This file contains all database functions.
 */

	function connect(){
		$conn = mysqli_connect("localhost", "root", "", "pluginmarket");

		if(!$conn){
			die("Connection failed: " . mysqli_connect_error());
			//return false;
		}

		return $conn;
	}

?>