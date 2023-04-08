<?php
require 'function.php';
$mahasiswa = query('SELECT * FROM mahasiswa');

if (isset($_POST['submit'])) {
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil ditambahkan');
                document.location.href='index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal ditambahkan');
                document.location.href='index.php';
            </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data - Belajar CRUD PHP</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" require>
            </li>
            <li>
                <label for="nama">NPM :</label>
                <input type="text" name="npm" require>
            </li>
            <li>
                <label for="nama">Jurusan :</label>
                <input type="text" name="jurusan" require>
            </li>
            <li>
                <label for="nama">Email :</label>
                <input type="text" name="email" require>
            </li>
            <li>
                <label for="nama">Gambar :</label>
                <input type="text" name="gambar" require>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>