<?php
	/**
 *	This file contains all database functions.
 */


		$conn = new mysqli("localhost", "root", "", "pluginmarket");

		if(!$conn){
			die("Connection failed: " . $conn -> connect_error);
			//return false;
		}
		else 
		{
			echo "connected";
		}



?>