<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>project5</title>
</head>
<body>
    <h2>DATA SISWA</h2>

    <?php 
    include 'koneksi.php';
    ?>

    <table border="1">
        <tr>
            <th width="1%">Id</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jurusan</th>
        </tr>

        <?php 
        $no = 1;
        $sql = mysqli_query($db,"select * from siswa");
        while($data = mysqli_fetch_array($sql)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><?php echo $data['jurusan']; ?></td>
        </tr>
        <?php 
        }
        ?>
    </table>

    <script>
    window.print();
    </script>
</body>
</html>