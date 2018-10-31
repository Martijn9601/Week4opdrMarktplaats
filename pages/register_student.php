<?php 

	include '../functions/helpers.php';
	include '../functions/db_functions.php';
	include '../functions/student_queries.php';

	if(isset($_POST['submit'])){
		register_student($_POST);
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Formulier</title>
	<link rel="stylesheet" type="" href="../css/style.css">
</head>
<body>
	<section class="container">
		<!-- <a id="home"></a> -->
		<div class="grid1">
			<div class="top">
				<h1>Register as a student</h1></div>
	  				<div class="form">
	  					<form method="post">
	    					<label for="fname"></label>
	    						<input type="text" id="fname" name="firstname" placeholder="Your name.." value="martijn" required>
								<br>
							<label for="mname"></label>
	    						<input type="text" id="mname" name="middlename" placeholder="Your middle name..">
								<br>
	    					<label for="lname"></label>
	   							<input type="text" id="lname" name="lastname" placeholder="Your last name.." value="redeker" required>
								<br>
							<label for="dateofbirth"></label>
	    						<input type="date" id="date" name="dateofbirth" placeholder="" value="2018-10-12" required>
								<br>
	   						<label for="email"></label>
	   							<input type="email" id="email" name="email" placeholder="Your email.." value="martijn.redeker@icloud.com" required>
								<br>
	    					<label for="gender"></label>
							    <select id="gender" name="gender">
							      <option value="1" selected>Male</option>
							      <option value="0">Female</option>						
							    </select>
							    <br>
						    <label for="password"></label>
	    						<input type="password" id="psw" name="password" placeholder="Your password.." value="skljlss" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
							<input type="submit" name="submit" value="Submit">
						</form>

	  				</div>
				  	<a href="../index.php">Terug</a> 


				</div class="sluit">
				
				</div>
		
	</section>


</body>
</html>


