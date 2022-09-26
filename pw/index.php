<?php 

require 'functions.php';
// koneksi ke DB dan pilih DB
//$conn = mysqli_connect('localhost', 'root','', 'prakweb_A_203040030_pw');

//query isi tabel mahasiswa 
$buku = query("SELECT * FROM buku");

//ubah data ke dalam array
// $row = mysqli_fetch_row($result); Array numerik
// $row = mysqli_fetch_assoc($result); Array assosiative
// $row = mysqli_fetch_array($result); Keduanya
//$rows = [];
//while ($row = mysqli_fetch_assoc($result)) {
//    $rows[] = $row;
//}

if (isset($_POST['cari'])) {
  $buku = cari($_POST['keyword']);
}

//tampung ke varubel mahasiswa
//$buku = $rows;


?>
<!DOCTYPE html>
  <html>
  <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Buku Terlaris</title>
</head>

    <body>
    <h1 align=center>BUKU TERLARIS</h1>
          <form align=center action="" method="POST">
            <input type="text" name="keyword" size="40" placeholder="Masukan keyword pencarian" autocomplete="off" autofocus>
            <button type="submit" name="cari">Cari</button>
            
            <br><br>
          </form> 
          

        <div class="container">
        <a class="btn btn-primary position-relative" href="tambah.php">Tambah  Buku</a>
          
          
            <table class="table table-striped table-hover" align="center" cellspacing="0" cellpadding="10">
                <thead>
                <tr>
                    <th>No</th>
                    <th>JUDUL BUKU</th>
                    <th>PENULIS</th>
                    <th>GAMBAR</th>
                    <th>HARGA</th>
                    <th>AKSI</th>
                </tr>
                </thead>

                <tbody>
                <?php $i = 1; 
                foreach($buku as $bk) : ?>

                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $bk['judul_buku']; ?></td>
                    <td><?= $bk['penulis']; ?></td>
                    <td><img src="img/<?= $bk['gambar']; ?>" width="100"></td>
                    <td><?= $bk ['harga']; ?></td>
                    <td>
                    <a href="ubah.php?id=<?= $bk['id']; ?>" type="button" class="btn btn-primary position-relative">Ubah
                    </a>
                    <a href="hapus.php?id=<?= $bk['id']; ?>" onclick="return confirm('apakah anda yakin?')" type="button" class="btn btn-primary position-relative">Hapus
                      <a >
                    </a>
                    </a>

                </td>
                    
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            <script src=" ../script.js"></script>

          </div>
    </body>
  </html>