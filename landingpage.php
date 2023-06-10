<!DOCTYPE html>
<html>
<head>
	<title>Landing Page</title>
	<style>
		body {
			background-color: #f2f2f2;
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}
		header {
			background-color: #03a500;
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
		section.hero {
			background-image: url('https://images.unsplash.com/photo-1618855981467-bc41c8e2d0bb');
			background-size: cover;
			background-position: center;
			height: 500px;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			color: #fff;
			text-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
			text-align: center;
		}
		section.hero h2 {
			font-size: 48px;
			margin: 0;
			margin-bottom: 20px;
		}
		section.hero p {
			font-size: 24px;
			margin: 0;
			margin-bottom: 50px;
		}
		section.features {
			padding: 20px;
			margin: 20px;
			background-color: #fff;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
			border-radius: 5px;
			min-height: 400px;
			display: flex;
			flex-wrap: wrap;
			justify-content: space-around;
			align-items: center;
		}
		section.features h2 {
			font-size: 36px;
			margin: 0;
			margin-bottom: 20px;
			text-align: center;
			flex-basis: 100%;
		}
		section.features .feature {
			flex-basis: 30%;
			margin-bottom: 20px;
			padding: 20px;
			background-color: #eee;
			border-radius: 5px;
			text-align: center;
		}
		section.features .feature h3 {
			font-size: 24px;
			margin: 0;
			margin-bottom: 10px;
		}
		section.features .feature p {
			font-size: 16px;
			margin: 0;
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
			<li><a href="#">Tentang kita</a></li>
			<li><a href="login.php" onclick=""return confirmLogout() >Login</a></li>
	</nav>

	<section class="hero">
		<h2>Selamat Datang</h2>
		<p>FARM ID selalu menyediakan berita terbaru dan terkini seputar pertanian. Dan juga tips-tips seputar pertanian. Jadi tunggu apa lagi? Mari masuk sekarang.</p>
	</section>

	<section class="features">
		<h2>Our Features</h2>
		<div class="feature">
			<h3>Feature 1</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed gravida augue et turpis lobortis auctor.</p>
		</div>
		<div class="feature">
			<h3>Feature 2</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed gravida augue et turpis lobortis auctor.</p>
		</div>
		<div class="feature">
			<h3>Feature 3</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed gravida augue et turpis lobortis auctor.</p>
		</div>
		<div class="feature">
			<h3>Feature 4</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed gravida augue et turpis lobortis auctor.</p>
		</div>
	</section>

	<footer>
		<p>&copy; 2023 My Website. All Rights Reserved.</p>
	</footer>
</body>
</html>