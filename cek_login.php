<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = md5($_POST['password']);


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($conn,"SELECT * from tbl_user WHERE username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['level']=="Admin"){

		// buat session login dan username
		$_SESSION['login'] = true;
		$_SESSION['nama_lengkap'] = $data['nama_lengkap'];
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "Admin";
		// alihkan ke halaman dashboard admin
		header("location:admin/index.php");

	// cek jika user login sebagai pegawai
	}else if($data['level']=="User"){
		// buat session login dan username
		$_SESSION['login'] = true;
		$_SESSION['nama_lengkap'] = $data['nama_lengkap'];
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "User";
		// alihkan ke halaman dashboard pegawai
		header("location:user/index.php");

	// cek jika user login sebagai pengurus
	}else if($data['level']=="Owner"){
		// buat session login dan username
		$_SESSION['login'] = true;
		$_SESSION['nama_lengkap'] = $data['nama_lengkap'];
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "Owner";
		// alihkan ke halaman dashboard pengurus
		header("location:admin/index.php");

	}else{

		// alihkan ke halaman login kembali
		echo "<script>alert('Username atau Password tidak sesuai!');document.location='index.php'</script>";
	}	
}else{
	echo "<script>alert('Username atau Password tidak sesuai!');document.location='index.php'</script>";
}

?>