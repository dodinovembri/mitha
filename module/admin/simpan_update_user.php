<?php
	include 'module/koneksi.php'; 

	$username = $_POST['username'];
	$nama = $_POST['nama'];
	$id_role = $_POST['id_role'];	


	$query = "UPDATE user SET `username`='$username', `nama`='$nama', `id_role`='$id_role' WHERE `username`='$username' ";
	$hasil = mysqli_query($koneksi, $query);

	echo "<script>window.location.href = '?module=data_user';</script>";
	
?>