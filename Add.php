<?php
$host = "localhost"; //nama host database
$username = "root"; //username database
$password = ""; //password database
$database = "pertanian"; //nama database

$connect = mysqli_connect($host, $username, $password, $database);

//memeriksa koneksi
if (mysqli_connect_errno()) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

//jika form disubmit
if (isset($_POST['submit'])) {
    //mengambil data dari form
    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    //query untuk memasukkan data ke database
    $query = "INSERT INTO user (nama_lengkap, email, username, password) VALUES ('$nama_lengkap', '$email', '$username', '$password')";

    //mengeksekusi query
    if (mysqli_query($connect, $query)) {
        header("Location:view.php"); //Tambahkan header location
    } else {
        echo "Data gagal disimpan: " . mysqli_error($connect);
    }
}

//menutup koneksi ke database
mysqli_close($connect);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registrasi</title>
    <link rel="stylesheet" type="text/css" href="styleadd.css">
</head>
<body>
    <h2>Registrasi</h2>
    <form method="POST" action="">
        <label>Nama Lengkap:</label>
        <input type="text" name="nama_lengkap"><br>
        <label>Email:</label>
        <input type="text" name="email"><br>
        <label>Username:</label>
        <input type="text" name="username"><br>
        <label>Password:</label>
        <input type="text" name="password"><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
<html>

