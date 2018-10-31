<?php 

class ViewUser extends User{

	public function showAllUsers(){
		$datas = $this->getAllUsers();
		foreach ($datas as $data) {
			echo $data['product']."<br>";
			echo $data['user']."<br>";
			# code...
		}
	}
}



?>