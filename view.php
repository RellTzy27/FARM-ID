<?php
include ("config.php");
?>

<html>
<head>
    <title> Data User </title>
  <link rel="stylesheet" type="text/css" href="styleview.css">

</head>

<body>
    <a href="Add.php"><p> Tambah data </p></a>
    <table border="1">
        <thead>
            <tr>
                <th> Id user </th>
                <th> Nama lengkap </th>
                <th> Email </th>
                <th> Username </th>
                <th> Password </th>
                <th> Actions </th>
            <tr>
        </thead>
        <body>
            <?php
            $sql="SELECT * FROM user";
            $query=mysqli_query($db,$sql);
            $no = 1;

            while ($user=mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>".$no++."</td>";
                echo "<td>".$user['nama_lengkap']."</td>";
                echo "<td>".$user['email']."</td>";
                echo "<td>".$user['username']."</td>";
                echo "<td>".$user['password']."</td>";
                echo "<td>";
                echo "<a href=\"update.php?id_user=".$user['id_user']."\">Edit</a> | ";
                echo "<a href=\"hapus.php?id_user=".$user['id_user']."\" onClick=\"return confirm ('Apakah anda yakin mau dihapus?')\">Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
     </table>
 </body>
 </html>