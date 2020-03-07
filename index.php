<?php 
    // menghubungkan file index ke function
    require 'function/functions.php';

    // megirim data menggunakan fungsi
    $mahasiswa = query("SELECT * FROM mahasiswa");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Email</th>
        </tr>
        <!-- mendeklarasikan angka -->
        <?php $i = 1; ?>
        <!-- menggunakan perulangan khusus array di php -->
        <?php foreach( $mahasiswa as $mhs ) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="">ubah</a> |
                    <a href="">hapus</a>
                </td>
                <td><?= $mhs["gambar"]; ?></td>
                <td><?= $mhs["nrp"]; ?></td>
                <td><?= $mhs["nama"]; ?></td>
                <td><?= $mhs["jurusan"]; ?></td>
                <td><?= $mhs["email"]; ?></td>
            </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>