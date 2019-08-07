<?php 
include 'module/koneksi.php';
$id = $_GET['id'];

$query = mysqli_query($koneksi, "UPDATE alternatif SET `tolak`='yes' WHERE `alternatif`='$id'");
$query2 = mysqli_query($koneksi, "UPDATE penyisihan SET `tolak`='yes' WHERE `alternatif`='$id'");

		echo "<script>window.location.href = '?module=analisa';</script>";
?>