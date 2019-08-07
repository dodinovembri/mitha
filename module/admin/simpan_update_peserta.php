<?php
	include 'module/koneksi.php'; 

	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$universitas = $_POST['universitas'];
	$fakultas = $_POST['fakultas'];
	$jurusan = $_POST['jurusan'];	


	$query = "UPDATE peserta SET `nama`='$nama', `alamat`='$alamat', `universitas`='$universitas', `fakultas`='$fakultas', `jurusan`='$jurusan' WHERE `nim`='$nim' ";
	$hasil = mysqli_query($koneksi, $query);

	echo "<script>window.location.href = '?module=data_peserta';</script>";
	
?>