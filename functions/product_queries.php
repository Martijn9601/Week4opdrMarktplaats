<?php 

	function search_products($keyword){
		$conn = connect();
		$sql = "SELECT * FROM product WHERE title LIKE '%$keyword%'";
		$result = $conn ->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    $results = Array();
		    while($row = $result->fetch_assoc()){
		    	array_push($results, $row);
		    }
		    return $results;
		} 
		else {
		    return false;
		}

		$conn -> close(); 
	}

?>