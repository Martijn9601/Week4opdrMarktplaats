<?php 
	include './functions/db_functions.php';
	include './functions/product_queries.php';
	include './functions/user_queries.php';

	if(isset($_POST['submit'])){
		login_user($_POST);
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Formulier</title>
	<link rel="stylesheet" type="" href="css/style.css">
	<script src="js/javascript.js"></script>
</head>
<body>
	<section class="container">
		<!-- <a id="home"></a> -->
		<div class="grid1">
			<div class="top">
				<h1>Login as a user</h1></div>
	  				<div class="form">
	  					<form method="post">
	    					<label for="email"></label>
	    						<input type="text" id="fname" name="email" placeholder="Email address...">
								<br>
						    <label for="password"></label>
	    						<input type="password" id="psw" name="password" placeholder="Password..">
							<input type="submit" name="submit" value="Login">
						</form>

	  				</div>
	  				<a href="register.php">Registreren</a>
				  		
					 						
				</div class="sluit">
				
				</div>
		
	</section>


</body>

</html>