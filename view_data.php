<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project 5</title>
</head>
<body>
    <header>
        <h3>Daftar Siswa</h3>
    </header>

    <nav>
        <a href="add_data.php">Tambah Siswa Baru</a><br>
        <a href="print_data.php" target="_blank">Print Data Siswa</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jurusan</th>
            <th>Pilihan</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM siswa";
        $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";
                echo "<td>".$siswa['id']."</td>";
                echo "<td>".$siswa['nama']."</td>";
                echo "<td>".$siswa['alamat']."</td>";
                echo "<td>".$siswa['jurusan']."</td>";
                echo "<td>";
                echo "<a href='edit_data.php?id=".$siswa['id']."'>Edit</a> | ";
                echo "<a href='hapus_data.php?id=".$siswa['id']."'>Hapus</a>";
                echo "</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
    </table>

    <p>Total Siswa : <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>

    
