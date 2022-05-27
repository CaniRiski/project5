<?php
include("koneksi.php");

if( !isset($_GET['id']) ){
    header('Location: view_data.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}
?>

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
        <h3>Form Edit Siswa</h3>
    </header>

    <form action="proses_edit_data.php" method="POST">
        <table>
        <tr>
            <td></td>
            <td><input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="nama">Nama</label></td>
            <td><input type="text" name="nama" value="<?php echo $siswa['nama'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="alamat">Alamat</label></td>
            <td><textarea name="alamat"><?php echo $siswa['alamat'] ?></textarea></td>
        </tr>
        <tr>
            <td><label for="jurusan">Jurusan</label></td>
            <td><input type="text" name="jurusan" value="<?php echo $siswa['jurusan'] ?>" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan" name="simpan" /></td>
        </tr>
        </table>
    </form>
</body>
</html>