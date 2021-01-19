<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <center>
    <h2>Data Produk</h2>
    <a href="tambahproduk.html">Tambah Produk</a>
  </center>                                                                                     
  <div class="table-responsive">   
  <br>       
  <table class="table">
    <thead style="color: lightblue;">
      <tr>
        <div class="row">
          <div class="col-sm-1">Id Produk</div>
          <div class="col-sm-2">Nama Produk</div>
          <div class="col-sm-1">Kategori Produk</div>
          <div class="col-sm-1">Stok</div>
          <div class="col-sm-1">Harga</div>
          <div class="col-sm-2">Keterangan</div>
          <div class="col-sm-2">Gambar</div>
          <div class="col-sm-2">Aksi</div>
        </div>
      </tr>
    </thead>
      <?php

      include 'koneksi.php';

      $ambildata = mysqli_query($conn,"SELECT * from produk");
      while($row=mysqli_fetch_array($ambildata)){
        ?>
    <tbody>
      <tr>
        <div class="row">
          <div class="col-sm-1"><?php echo $row['id_produk']; ?></div>
          <div class="col-sm-2"><?php echo $row['nama_produk']; ?></div>
          <div class="col-sm-1"><?php echo $row['kategori']; ?></div>
          <div class="col-sm-1"><?php echo $row['stok']; ?></div>
          <div class="col-sm-1"><?php echo $row['harga']; ?></div>
          <div class="col-sm-2"><?php echo $row['keterangan']; ?></div>
          <div class="col-sm-2"><img src="img/<?php echo $row['gambar'];?>" alt="" style="max-width: 50%; height: auto;"></div>
          <div class="col-sm-2"><a href="hapusproduk.php?id=<?php echo $row['id_produk'];?>"> Hapus </a> | <a href="editproduk.php?id=<?php echo $row['id_produk'];?>"> Edit </a></div>
        </div>
      </tr>
    </tbody>
  </table>


  <?php } ?>
  </div>
</div>
</body>
</html>
