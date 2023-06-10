<?php
include_once("config.php");
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: view.php");
}

$id_user = $_GET['id_user'];

// get data user by id
$result = mysqli_query($db, "SELECT * FROM user WHERE id_user=$id_user");


// delete data user dari database
mysqli_query($db, "DELETE FROM user WHERE id_user=$id_user");

// redirect ke halaman utama setelah berhasil menghapus data
header("Location:view.php");