<?php 
include 'koneksi.php';
$id=$_GET['id'];
?>
<br>
<?php
$sql= "DELETE from produk where id_produk=$id";

$hasil = $conn->query($sql);
if (!$hasil) {
	echo "Gagal menghapus data";
}else{
	echo "";
}

// mengalihkan halaman kembali ke tampilproduk.php
header("location:tampilproduk.php");

?>

