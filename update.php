<?php
include('config.php');
$db = mysqli_connect("localhost", "root", "", "pertanian");

$kategori = mysqli_query($db, "SELECT * FROM user WHERE id_user = '".$_GET['id_user']."'");
$dat = mysqli_fetch_object($kategori);
?>

<html>
<head>
    <title>Edit data</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" placeholder="nama_lengkap" name="nama_lengkap" value="<?php echo $dat->nama_lengkap ?>">
        <br>
        <input type="text" placeholder="email" name="email" value="<?php echo $dat->email ?>">
        <br>
        <input type="text" placeholder="username" name="username" value="<?php echo $dat->username ?>">
        <br>
        <input type="text" placeholder="password" name="password" value="<?php echo $dat->password ?>">
        <br>
        <input type="submit" value="ubah" name="tambah">
    </form>

<?php
if(isset($_POST['tambah'])){
    $nama = $_POST['nama_lengkap'] ?? '';
    $gmail = $_POST['email'] ?? '';
    $usr = $_POST['username'] ?? '';
    $psswrd = $_POST['password'] ?? '';
    $update = mysqli_query($db, "UPDATE user SET
                                nama_lengkap = '".$nama."',
                                email = '".$gmail."',
                                username = '".$usr."',
                                password = '".$psswrd."'
                                WHERE id_user = '".$_GET['id_user']."'");
    if($update){
        echo '<script>alert("Berhasil")</script>';
        echo '<script>window.location="view.php"</script>';
    }else{
        echo '<script>alert("Gagal Ditambahkan!")</script>';
    }
}
?>

</body>
</html>