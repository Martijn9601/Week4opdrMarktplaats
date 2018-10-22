<?php 
		
		function log_data($data){
		echo("<script>console.log('". $data ."');</script>");
		}

		function connect(){
		$conn = mysqli_connect("localhost", "root", "", "marktplaatsopdr");

		if(!$conn){
			die("Connection failed: " . mysqli_connect_error());
			//return false;
		}

		return $conn;
	}
		
		function register_gebruiker($gebruiker){

				log_data(json_encode($gebruiker));

				$conn = connect();
					$sql = "INSERT INTO `gebruiker` (
						 `voornaam`, 
						 `achternaam`, 
						 `email`, 
						 `wachtwoord`) 
						VALUES (
						 '$gebruiker[voornaam]',
						 '$gebruiker[achternaam]',
						 '$gebruiker[email]',
						 '$gebruiker[wachtwoord]'
						)";

				if ($conn->query($sql) === TRUE) {
			    	echo "You have been registered";
				} else {
			    	echo "Could not register user. Error: " . $conn->error;
				}
				$conn -> close(); 

			}

		if(isset($_POST['submit'])){
		register_gebruiker($_POST);
		}

?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Registreren
	</title>
	<link rel="stylesheet" type="" href="style.css">
</head>
<body>
		<section class="container">
		<!-- <a id="home"></a> -->
		<div class="grid1">
			<div class="top">
				<h1>Registreren</h1></div>
	  				<div class="form">
	  					<form method="post">
	    					<label for="fname"></label>
	    						<input type="text" id="fname" name="voornaam" placeholder="Voornaam">
								<br>					
	    					<label for="lname"></label>
	   							<input type="text" id="lname" name="achternaam" placeholder="Achternaam">
								<br>
	   						<label for="email"></label>
	   							<input type="email" id="email" name="email" placeholder="Email">
								<br>	    				
						    <label for="password"></label>
	    						<input type="password" id="psw" name="wachtwoord" placeholder="Wachtwoord">
							<input type="submit" name="submit" value="Submit">
						</form>

	  				</div>
				  								
				</div class="sluit">
				
				</div>		
	</section>
</body>
</html>