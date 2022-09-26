<?php 

require 'functions.php';

//ambil dari url
$buku = $_GET['kode_buku'];

//query mahasiswa berdasarkan id
$bk = query("SELECT * FROM buku WHERE kode_buku = $buku");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Buku</title>
</head>
<body>
    <h3>Detail Mahasiswa</h3>
    <ul>
        <li><img src="img/<?= $bk['gambar']; ?>" width="250"></li>
        <li>Judul Buku : <?= $bk['judul_buku']; ?></li>
        <li>Penulis : <?= $bk['penulis']; ?></li>
        <li>Harga : <?= $bk['harga']; ?></li>
        <li><a href="ubah.php?id=<?= $mhs['kode_buku']; ?>">Ubah</a> | <a href="hapus.php?id=<?= $mhs['kode_buku']; ?>" onclick="return confirm('apakah anda yakin?')">Hapus</a></li>
        <li><a href="index.php">Kembali ke daftar buku</a></li>
    
    </ul>
</body>
</html>