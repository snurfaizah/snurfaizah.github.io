<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama_produk'];
$kategori = $_POST['kategori'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$keterangan = $_POST['keterangan'];
$gambar = $_POST['gambar'];

// menginput data ke database
mysqli_query($conn,"INSERT into produk VALUES(null,'$nama','$kategori','$harga','$stok','$keterangan','$gambar')");

// mengalihkan halaman kembali ke tampilproduk.php
header("location:tampilproduk.php");

?>