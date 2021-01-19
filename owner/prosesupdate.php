<?php 

include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama_produk'];
$kategori = $_POST['kategori'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];
$keterangan = $_POST['keterangan'];
$gambar = $_POST['gambar'];

$sql = "UPDATE produk SET nama_produk='$nama', kategori='$kategori', stok='$stok', harga='$harga', keterangan='$keterangan', gambar='$gambar' WHERE id_produk=$id";


$hasil = $conn->query($sql);
if (!$hasil) {
	echo "Edit data Gagal";
}else{
	echo "";
}

header("location:tampilproduk.php?pesan=update");
?>