<?php 

require 'functions.php';

// cek apakh tombol tambah sudah ditekan
if(isset($_POST['tambah'])) {
    if(tambah($_POST) > 0) {
        echo "<script>
            alert('Data Berhasil Ditambahkan');
            document.location.href = 'index.php';
        </script>";
    }else{
        echo "<script>
            alert('Data Gagal Ditambahkan');
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
    <title> Tambah Data Mahasiswa</title>
</head>
<body>
    <h3>Form Tambah Data Mahasiswa</h3>
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
            <label>
                Judul Buku :
                <input type="text" name="judul_buku" autofocus >
            </label>
            </li>
            <li>
            <label>
                Penulis :
                <input type="text" name="penulis" >
            </label>
            </li>
            <li>
            <label>
                Gambar :
                <input type="file" name="gambar" class="gambar" onchange="previewImage()" >
            </label>
            <li>
            <label>
                Harga :
                <input type="text" name="harga" >
            </label>
            </li>
            <img src="img/nophoto.png" width="120" style="display: block;" class="img-preview">
            </li>
            <li>
            <button type="submit" name="tambah">Tambah Data!</button>
            </li>
        
        </ul>
    
    </form>
    <script src="js/script.js"></script>
</body>
</html>