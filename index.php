<?php 
	include './functions/db_functions.php';
	include './functions/product_queries.php';
	include './functions/helpers.php';

	$json_results = Array();

	if(isset($_POST['submit'])){
		$result = search_products($_POST['keyword']);
		log_data(json_encode($result));
		$json_results = json_encode($result);
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Plugin Market
	</title>
</head>
<body>
<header> 
		<a href="/">
			<div class="logo">plugin market</div>
		</a>
		<nav>
			<a href="login.php">login</a>
			<a href="register.php">register</a>
		</nav>
</header>

<main>
	<section class="search">
		<h1>Search for products</h1>
		<div class="form">
			<form method="post">
			<label for="search"></label>
				<input type="text" id="fname" name="keyword" placeholder="e.g. massive template">
				<br>				   
			<input type="submit" name="submit" value="search">
		</form>
		</div>
	</section>

	<ul id="search-results"></ul>
</main>

<script type="text/javascript">

	//Grab results from PHP variable.
	var search_results = <?php echo json_encode($json_results);  ?>;
	
	//If there are results create results list.
	if(search_results.length > 0){
		//Parse from JSON string To array.
		search_results = JSON.parse(search_results);
		const ul = document.getElementById("search-results");

		for(var i in search_results){
			const result = search_results[i];

			let li = document.createElement("li");
			const h2 = document.createElement("h2");
			const p = document.createElement("p");
			const a = document.createElement("a");
			a.setAttribute("href", "/products/" + result["id"]);


			h2.appendChild(document.createTextNode(result["title"]));
			a.appendChild(h2)
			p.appendChild(document.createTextNode(result["description"]));

			li.appendChild(a);
			li.appendChild(p);
			ul.appendChild(li);
		}
	}

</script>

</body>
</html>