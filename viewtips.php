<?php
include("config.php");
?>

<html>
<head>
    <title>Data User</title>
    <link rel="stylesheet" type="text/css" href="styleview.css">
</head>

<body>
    <a href="addtips.php"><p>Tambah data</p></a>
    <table border="1">
        <thead>
            <tr>
                <th>Id Tips</th>
                <th>Judul</th>
                <th>Isi</th>
                <
                    
                th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM addtips";
            $query = mysqli_query($db, $sql);
            $no = 1;

            while ($tips = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>".$no++."</td>";
                echo "<td>".$tips['judul']."</td>";
                echo "<td>".$tips['isi']."</td>";

                echo "<td>";
                echo "<a href=\"update.php?id_tips=".$tips['id_tips']."\">Edit</a> | ";
                echo "<a href=\"hapus.php?id_tips=".$tips['id_tips']."\" onClick=\"return confirm('Apakah anda yakin mau dihapus?')\">Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>