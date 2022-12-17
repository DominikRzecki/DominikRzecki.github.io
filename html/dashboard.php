<?php
	session_start();
	if(!isset($_SESSION['userName'])) {
		session_unset();
  	session_destroy();
  	header('Location: login.php');
  	exit();
	}

	function redirect($url) {
		header('Location:'.$url, true);
		exit();
	}
?>
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
			<a class = "active" href= "dashboard.php">Dashboard</a>
			<a class = "scale-on-hover" href= "logout.php">Logout</a>
		</div>
		<div class = "grid-container">
			<div class = "card scale-on-hover", style = "grid-row: 1; grid-column-start: 1; grid-column-end: 4">
				<div class = "title", id = "biography">
					Settings
				</div>
				<div class = "container">
					coming soon
				</div>
			</div>	
			<div class = "card scale-on-hover", style = "grid-row: 2; grid-column: 1">
				<div class = "title", id = "blog">
					Statistics
				</div>
				<div class = "container">
					Coming soon
				</div>
			</div>
			<div class = "card scale-on-hover", style = "grid-row: 2; grid-column-start: 2; grid-column-end: 4">
				<div class = "title", id = "social-media">
					Share
				</div>
				<div class = "container">
					Coming soon
				</div>
			</div>
		</div>
	</body>
</html>
