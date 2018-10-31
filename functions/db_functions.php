<?php
	/**
 *	This file contains all database functions.
 */

	function connect(){
		$conn = new mysqli("localhost", "root", "", "pluginmarket");

		if(!$conn){
			die("Connection failed: " . $conn -> connect_error);
			//return false;
		}

		return $conn;
	}

?>