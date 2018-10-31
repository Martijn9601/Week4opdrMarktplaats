<?php 


if(isset($_POST['submit'])){
	print_r($_POST);
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
				<h1>Register for teachers</h1></div>		
	  				<div class="form">
	  					<form action="phpform.php" method="post">
	    					<label for="fname"></label>
	    						<input type="text" id="fname" name="firstname" placeholder="Your name..">
								<br>
	    					<label for="lname"></label>
	   							<input type="text" id="lname" name="lastname" placeholder="Your last name..">
								<br>
	   						<label for="email"></label>
	   							<input type="email" id="email" name="email" placeholder="Your email..">
								<br>
	    					<label for="Gender"></label>
							    <select id="gender" name="gender">
							      <option value="Male">Male</option>
							      <option value="Female">Female</option>						
							    </select>
							<input type="submit" name="submit" value="Submit">
						</form>

	  				</div>
				<a href="../index.php">Terug</a> 	
					 						
				</div class="sluit">
				

				<!-- <button type="submit" form="form1" value="Submit">Submit</button> -->
				
				</div>
		
	</section>


</body>
</html>


