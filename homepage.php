<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<style>
		body {
			background-color: #f2f2f2;
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}
		header {
			background-color: #03A500;
			color: #fff;
			padding: 20px;
			text-align: center;
		}
		h1 {
			margin: 0;
			font-size: 36px;
			font-weight: normal;
		}
		nav {
			background-color: #fff;
			border-bottom: 1px solid #ccc;
			display: flex;
			justify-content: space-between;
			align-items: center;
			padding: 10px;
		}
		nav ul {
			margin: 0;
			padding: 0;
			list-style: none;
			display: flex;
		}
		nav li {
			margin: 0 10px;
		}
		nav a {
			color: #333;
			text-decoration: none;
			font-weight: bold;
			padding: 5px;
		}
		nav a:hover {
			background-color: #eee;
			border-radius: 5px;
		}
		section {
			padding: 20px;
			margin: 20px;
			background-color: #fff;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
			border-radius: 5px;
			min-height: 400px;
		}
		footer {
			background-color: #333;
			color: #fff;
			padding: 20px;
			text-align: center;
		}
	</style>
</head>
<body>
	<header>
		<h1>FARM ID</h1>
	</header>

	<nav>
		<ul>
			<li><a href="#">Beranda</a></li>
			<li><a href="#">Tentang kami</a></li>
			<li><a href="login.php" onclick=""return confirmLogout() >Log Out</a></li>
		</ul>
	</nav>

	<section>
		<h2>Featured Content</h2>
		<p>Proses bentar</p>
	</section>

	<footer>
		<p>&copy; 2023 FARM ID. All Rights Reserved.</p>
	</footer>
	<div class='page'>
<?php


?>

</div>
</body>
</html>
