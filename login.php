<?php
//koneksi ke database
$host = "localhost"; //nama host database
$username = "root"; //username database
$password = ""; //password database
$database = "pertanian"; //nama database

$db = mysqli_connect($host, $username, $password, $database);

//memeriksa koneksi
if (mysqli_connect_errno()) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

//jika form disubmit
if (isset($_POST['submit'])) {
    //mengambil data dari form
    $email = $_POST['email'];
    $password = $_POST['password'];

    //query untuk mencari data pengguna
    $query = "SELECT * FROM user WHERE email='$email' AND PASSWORD='$password'";

    //mengeksekusi query
    $result = mysqli_query($db, $query);

    //mengecek apakah data pengguna ditemukan atau tidak
    if (mysqli_num_rows($result) == 1) {
        //jika ditemukan, set session variables
        session_start();
        $_SESSION["email"] = $email;
        //redirect ke halaman dashboard
        header('Location: homepage.php');
        exit;
    } else {
        //jika tidak ditemukan, tampilkan pesan error
        $error_message = "Username atau password salah.";
    }
}

//menutup koneksi ke database
mysqli_close($db);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Form Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<class="background">
    <form method="POST" action="">
        <div class="signup-text">
            <p>Log in</p>
            <div class="FreeAccount">
                <?php if (isset($error_message)) { ?>
                    <div class="error">
                        <?php echo $error_message; ?>
                    </div>
                <?php } ?>
                <div class="col-top">
                    <label>Email</label>
                    <input type="text" name="email" required autocomplete="off" placeholder="Email">
                    <label>Password</label>
                    <input type="password" name="password" required placeholder="Password" minlength="4" maxlength="25">
                    <input type="submit" name="submit" value="Log in">
                </div>
            </div>
        </div>
    </form>
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>

</html>
