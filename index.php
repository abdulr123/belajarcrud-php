<?php
require 'function.php';
$mahasiswa = query('SELECT * FROM mahasiswa');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar CRUD PHP</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <a href="tambah.php">Tambah Data</a>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <td>No.</td>
            <td>Nama</td>
            <td>NPM</td>
            <td>Jurusan</td>
            <td>Email</td>
            <td>Gambar</td>
            <td>Aksi</td>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $row) { ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['npm']; ?></td>
                <td><?php echo $row['jurusan']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><img src="img/<?php echo $row['gambar']; ?>" width="50"></td>
                <td>
                    <a href="ubah.php?id=<?php echo $row['id']; ?>">Update</a> |
                    <a href="hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Yakin Ingin Menghapus Data');">Delete</a> 
                </td>
            </tr>
            <?php ++$i; ?>
        <?php } ?>

        
    </table>
</body>
</html>