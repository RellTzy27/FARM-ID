<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "pertanian";

$connect = mysqli_connect($host, $username, $password, $database);

if (mysqli_connect_errno()) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];

}
mysqli_close($connect);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Input Data</title>
</head>
<body>
    <h1>Form Input Data</h1>
    <form method="POST" enctype="multipart/form-data">
        <label for="judul">Judul:</label>
        <input type="text" id="judul" name="judul" required><br><br>
        
        <label for="isi">Isi:</label>
        <textarea id="isi" name="isi" required></textarea><br><br>

        <input type="submit" name="submit" value="Simpan">
    </form>
</body>
</html>