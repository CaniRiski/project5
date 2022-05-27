<?php
include("koneksi.php");

if(isset($_POST['daftar'])){

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jurusan = $_POST['jurusan'];

    $sql = "INSERT INTO siswa (id, nama, alamat, jurusan) VALUE ('$id', '$nama', '$alamat', '$jurusan')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }

} else {
    die("Akses dilarang...");
}
?>