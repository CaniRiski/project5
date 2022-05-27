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
        <h3>Tambah Siswa</h3>
    </header>

    <form action="proses_add_data.php" method="POST">
        <table>
        <tr>
            <td><label for="id">Id</label></td>
            <td><input type="text" name="id"/></td>
        </tr>
        <tr>
            <td><label for="nama">Nama</label></td>
            <td><input type="text" name="nama"/></td>
        </tr>
        <tr>
            <td><label for="alamat">Alamat</label></td>
            <td><textarea name="alamat"></textarea></td>
        </tr>
        <tr>
            <td><label for="jurusan">Jurusan</label></td>
            <td><input type="text" name="jurusan"/></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Daftar" name="daftar" /></td>
        </tr>
        </table>
    </form>
</body>
</html>