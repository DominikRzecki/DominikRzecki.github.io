<html>
	<head>
		<meta charset = "utf-8">	
		<meta name = "author" content = "Dominik Rzecki">
		<meta name = "description" content = "Dominik Rzecki Login">
		<meta name = "robots" content = "noindex">
		<meta name = "keywords" content = "Dominik, Rzecki, Blog, Homepage, Login">
		<meta name = "viewport" content = "width = device-width, initial-scale = 1">

		<link rel = "shortcut icon" href= "media/favicon.png" type = "image/x-icon">
		<link rel = "stylesheet" href= "css/style.css">
	</head>
	<body >
		<div class = "navbar-fixed-top">
			<a class = "scale-on-hover" href= "index.php">Dominik Rzecki</a>
			<a class = "scale-on-hover" href= "index.php">Biography</a>
			<a class = "scale-on-hover" href= "index.php">Blog</a>
			<a class = "scale-on-hover" href= "index.php">Projects</a>
			<a class = "active" href= "login.php">Login</a>
		</div>
		<div class = "grid-container">
			<div class = "card scale-on-hover", style = "grid-row: 2; grid-column: 1">
				<div class = "title", id = "blog">
					Login
				</div>
				<div class = "container">
					<?php
					if(session_id() == '') {
						echo "<form class = 'card scale-on-hover', style = 'margin: 50;', action = 'authenticate.php' method = 'POST'>
							<p>username:
							<input type = 'text' name = 'username' size = 15 maxlength =  30>
							<p>password:
							<input type = 'text' name = 'password' size = 15 maxlength =  30>
							<input type = 'submit' value = 'submit'>
						</form>";
					} else {
						echo 'ERROR: Already logged in.';
					}
				?>
				</div>
			</div>
		</div>
	</body>
</html>
