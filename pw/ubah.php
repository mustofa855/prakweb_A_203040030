<?php 

require 'functions.php';

$id = $_GET['id'];

// Query Mahasiswa berdasarkan id
$bk = query("SELECT * FROM buku WHERE id = $id");

// cek apakah tombol ubah sudah ditekan
if(isset($_POST['ubah'])) {
    if(ubah($_POST) > 0) {
        echo "<script>
            alert('Data Berhasil Diubah!');
            document.location.href = 'index.php';
        </script>";
    }else{
        echo "<script>
            alert('Data Gagal Diubah!');
            document.location.href = 'index.php';
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Ubah Data Buku</title>
</head>
<body>
    <h3>Form Ubah Data Buku</h3>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $bk['id']; ?>">
        <ul>
            <li>
            <label>
                Judul Buku :
                <input type="text" name="judul_buku" autofocus required value="<?= $bk['judul_buku']; ?>">
            </label>
            </li>
            <li>
            <label>
                Penulis :
                <input type="text" name="penulis" required value="<?= $bk['penulis']; ?>">
            </label>
            </li>
            <li>
            <input type="hidden" name="gambar_lama" value="<?= $mhs['gambar']; ?>">
            <label>
                Gambar :
                <input type="file" name="gambar" class="gambar" onchange="previewImage()" >
            </label>
            <img src="img/<?= $mhs['gambar']; ?>" width="120" style="display: block;" class="img-preview">
            </li>
            <li>
            <label>
                Harga :
                <input type="text" name="harga" required value="<?= $bk['harga']; ?>">
            </label>
            </li>
            <li>
            <button type="submit" name="ubah">Ubah Data!</button>
            </li>
        
        </ul>
    
    </form>
    <script src="script.js"></script>
</body>
</html>