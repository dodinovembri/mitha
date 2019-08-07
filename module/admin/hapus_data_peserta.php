<?php
	include 'module/koneksi.php';

	$nim = $_GET['nim'];
	
	$query2 = "DELETE FROM `penyisihan` where `alternatif`='$nim'";
	$hasil2 = mysqli_query($koneksi,$query2);

	$query = "DELETE FROM `peserta` where `nim`='$nim'";
	$hasil = mysqli_query($koneksi,$query);
	
	if (!$hasil)
		die ("Penghapusan gagal!!!");
	
	echo "<script>window.location.href = '?module=data_peserta';</script>";

?>