<?php 
include "koneksi.php";

$id=$_GET['id'];
$hasil = $conn->query("SELECT * FROM produk where id_produk=$id");
$row = $hasil->fetch_assoc()


 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
    <div class="container">     
        <center><h1>Edit Produk</h1></center>
        <form class="form-horizontal" method="POST" action="prosesupdate.php">
            <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $row['id_produk']; ?>">
                <label for="nama_produk">Nama:</label>
                <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="<?php echo $row['nama_produk']; ?>">
            </div>
            <div class="form-group">
                <label for="kategori">Kategori:</label>
                <input type="text" class="form-control" id="kategori" name="kategori" value="<?php echo $row['kategori']; ?>">
            </div>
            <div class="form-group">
                <label for="stok">Stok:</label>
                <input type="text" class="form-control" id="stok" name="stok" value="<?php echo $row['stok']; ?>">
            </div>
            <div class="form-group">
                <label for="harga">Harga:</label>
                <input type="text" class="form-control" id="harga" name="harga" value="<?php echo $row['harga']; ?>">
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan:</label>
                <textarea class="form-control" rows="5" id="keterangan" name="keterangan" value="<?php echo $row['keterangan']; ?>"></textarea>
            </div>
            <div class="form-group">
                <div class="btn btn-mdb-color btn-rounded float-left">
                    <span>Choose file</span>
                    <input type="file" name="gambar">
             </div>
            </div>
            
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

</body>
</html>