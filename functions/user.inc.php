<?php 

class User extends Dbh{

	public function getAllUsers(){
		$sql = "SELECT * FROM user";
		$result = $this->connect()->query($sql);
		$numRows = $result->num_rows;
		if ($num_rows > 0){
			while ($row = $result->fetch_assoc()){
				$data[] = $row;
			}
			return $data;
		}
	}
}



?>