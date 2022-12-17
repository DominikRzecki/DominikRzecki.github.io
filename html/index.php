<?php 
	session_start();
?>
<html lang="en-US">
	<head>
		<meta charset = "utf-8">		
		<meta name = "author" content="Dominik Rzecki">	
		<meta name = "description" content="Welcome to Dominik Rzecki's blog homepage!">
		<meta name = "keywords" content="Dominik, Rzecki, Blog, Homepage, IT Blog, electrnics blog, biography">
		<meta = "viewport" content = "width = device-width, initial-scale = 1">

		<link rel="shortcut icon" href="media/favicon.png" type="image/x-icon">
		<link rel="stylesheet" href="css/style.css">

		<title>Dominik Rzecki Blog</title>
		
	</head>
	<body>
		<div class = "navbar-fixed-top">
			<a class = "active" href="#home">Dominik Rzecki</a>
			<a class = "scale-on-hover" href="#biography">Biography</a>
			<a class = "scale-on-hover" href="#blog">Blog</a>
			<a class = "scale-on-hover" href="#projects">Projects</a>
			<?php
			if(isset($_SESSION['userName'])){
				echo '<a class = "scale-on-hover" href="dashboard.php">Dashboard</a>';
				echo '<a class = "scale-on-hover" href="logout.php">Logout</a>';
			} else {
				echo '<a class = "scale-on-hover" href="login.php">Login</a>';
			}
			?>
		</div>
		<div class = "header">
			<div class = "text-green scale-on-hover">
				<a style = "text-decoration: none;"href = "#biography">
					Welcome
				</a>
			</div>
		</div>
		<div class = "grid-container">
			<div class = "card scale-on-hover", style = "grid-row: 1; grid-column-start: 1; grid-column-end: 4">
				<div class = "title", id = "biography">
					Biography
				</div>
				<div class = "container">
					Hello and welcome to my blog. My name is Dominik Rzecki and on this site I wanna share some information about my day to day life, as well as it and electronics projects and pictures. I am an electronics engineering student at the TGM in Vienna, downhill ski-racer, swimmer, bike enthusiast, and photographer.
				</div>
			</div>	
			<div class = "card scale-on-hover", style = "grid-row: 2; grid-column: 1">
				<div class = "title", id = "blog">
					Blog
				</div>
				<div class = "container">
					comming soon :D
				</div>
			</div>
			<div class = "card scale-on-hover", style = "grid-row: 2; grid-column: 2">
				<div class = "title", id = "social-media">
					Social Media
				</div>
				<div class = "container">
					<a href = "https://instagram.com/dominik.rzecki/">
					<img alt = "Instagram" src = "media/instagram-glyph.png" width = "50" height = "50">
					</a>
				</div>
			</div>
			<div class = "card scale-on-hover", style = "grid-row: 2; grid-column: 3">
				<div class = "title", id = "projects">
					Projects
				</div>
				<div class = "container">
					<a href = "https://github.com/DominikRzecki/">
					<img alt = "GitHub" src = "media/GitHub-Mark-120px-plus.png" width = "50" height = "50">
					</a>
				</div>
			</div>
		</div>
		<div class = "bar-bottom scale-on-hover">
			<a>About</a>
		</div>
	</body>
</html>
