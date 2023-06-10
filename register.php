<?php include('config.php');

if(isset($_POST['submit'])){
    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $username = $_POST ['username'];
    $pass = $_POST['password'];

    $result = mysqli_query($db, "INSERT INTO user (nama_lengkap, email, username, password) VALUES('$nama_lengkap','$email', '$username','$pass')");

    if($result){
        header("location: login.php");
    } else {
        echo "Gagal menyimpan data.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>

<body class="body">
	<form action="" method="POST">
		<h2>Register</h2>
        <label for="nama_lengkap">Nama lengkap:</label>
		<input type="text" id="nama_lengkap" name="nama_lengkap"required autocomplete="off">

		<label for="email">Email:</label>
		<input type="email" id="email" name="email"required autocomplete="off">

		<label for="username">Username</label>
		<input type="text" id="username" name="username"required autocomplete="off">

        <label for="password">Password:</label>
		<input type="password" id="password" name="password"required autocomplete="off">

		<button type="submit" name="submit">Login</button>

	</form>
</body>
</html>