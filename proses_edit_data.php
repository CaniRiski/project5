<?php
include("koneksi.php");

if(isset($_POST['simpan'])){

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jurusan = $_POST['jurusan'];

    $sql = "UPDATE siswa SET nama='$nama', alamat='$alamat', jurusan='$jurusan' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: view_data.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }

} else {
    die("Akses dilarang...");
}
?>