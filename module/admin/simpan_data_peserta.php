<?php
	include 'module/koneksi.php'; 

	$nim = $_POST['nim'];
	if ($nim %2 == 0) {
		$jk = 'P';
	}
	else if ($nim %2 == 1) {
		$jk = 'L';
	}
	$id_user = $_SESSION["username"];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$universitas = $_POST['universitas'];
	$fakultas = $_POST['fakultas'];
	$jurusan = $_POST['jurusan'];
	// $jk = $_POST['jk'];
	$ipk = $_POST['ipk'];
	$tb = $_POST['tb'];
	
	if ($jk == 'L') {
		if ($ipk < 2.75) {
			echo "<script>	
							window.alert('Peserta tidak memnuhi syarat');				
							window.location.href = '?module=data_peserta';
					 </script>";
		}
		else if ($tb < 165) {
			echo "<script>	
							window.alert('Peserta tidak memnuhi syarat');				
							window.location.href = '?module=data_peserta';
					 </script>";
		}
		else{
			$query_cek = "SELECT * FROM peserta WHERE nim='$nim'";
			$hasil_cek = mysqli_query($koneksi, $query_cek);

			while ($nim_d = mysqli_fetch_array($hasil_cek)) {
				$nim_db = $nim_d['nim'];
			}
			
			if ($nim_db == $nim) {
				echo "<script>
							window.alert('Data Peserta Sudah Ada Dalam Database');
							window.location.href = '?module=input_data_peserta';
					 </script>";
			}
			else{
				$query = "INSERT INTO peserta (`nim`, `nama`, `alamat`, `jk`, `universitas`, `fakultas`, `jurusan`) VALUES ('$nim', '$nama', '$alamat', '$jk', '$universitas', '$fakultas', '$jurusan')";
				$hasil = mysqli_query($koneksi, $query);

				// $query2 = "INSERT INTO alternatif (`alternatif`, `jk`) VALUES ('$nim', '$jk')";
				// $hasil2 = mysqli_query($koneksi, $query2);	
				//mysql_query($koneksi, "INSERT INTO penyisihan_tertulis (`alternatif`, `id_user`) VALUES ('$nim', '$id_user')");
				$query2 = mysqli_query($koneksi, "INSERT INTO penyisihan (`alternatif`, `jk`) VALUES ('$nim', '$jk')");			
				$query3 = mysqli_query($koneksi, "INSERT INTO penyisihan_tertulis (`alternatif`, `id_user`) VALUES ('$nim', '$id_user')");
				$query4 = mysqli_query($koneksi, "INSERT INTO penyisihan_psikotest (`alternatif`, `id_user`) VALUES ('$nim', '$id_user')");
				$query5 = mysqli_query($koneksi, "INSERT INTO penyisihan_wii (`alternatif`, `id_user`) VALUES ('$nim', '$id_user')");


				echo "<script>					
							window.location.href = '?module=data_peserta';
					 </script>";
			}
			
		}
	}
	else if ($jk == 'P') {
		if ($ipk < 2.75) {
			echo "<script>	
							window.alert('Peserta tidak memnuhi syarat');				
							window.location.href = '?module=data_peserta';
					 </script>";
		}
		else if ($tb < 155) {
			echo "<script>	
							window.alert('Peserta tidak memnuhi syarat');				
							window.location.href = '?module=data_peserta';
					 </script>";
		}
		else{
			$query_cek = "SELECT * FROM peserta WHERE nim='$nim'";
			$hasil_cek = mysqli_query($koneksi, $query_cek);

			while ($nim_d = mysqli_fetch_array($hasil_cek)) {
				$nim_db = $nim_d['nim'];
			}
			
			if ($nim_db == $nim) {
				echo "<script>
							window.alert('Data Peserta Sudah Ada Dalam Database');
							window.location.href = '?module=input_data_peserta';
					 </script>";
			}
			else{
				$query = "INSERT INTO peserta (`nim`, `nama`, `alamat`, `jk`, `universitas`, `fakultas`, `jurusan`) VALUES ('$nim', '$nama', '$alamat', '$jk', '$universitas', '$fakultas', '$jurusan')";
				$hasil = mysqli_query($koneksi, $query);

				// $query2 = "INSERT INTO alternatif (`alternatif`, `jk`) VALUES ('$nim', '$jk')";
				// $hasil2 = mysqli_query($koneksi, $query2);	
				$query2 = mysqli_query($koneksi, "INSERT INTO penyisihan (`alternatif`, `jk`) VALUES ('$nim', '$jk')");
				$query3 = mysqli_query($koneksi, "INSERT INTO penyisihan_tertulis (`alternatif`, `id_user`) VALUES ('$nim', '$id_user')");
				$query4 = mysqli_query($koneksi, "INSERT INTO penyisihan_psikotest (`alternatif`, `id_user`) VALUES ('$nim', '$id_user')");
				$query5 = mysqli_query($koneksi, "INSERT INTO penyisihan_wii (`alternatif`, `id_user`) VALUES ('$nim', '$id_user')");

				echo "<script>					
							window.location.href = '?module=data_peserta';
					 </script>";
			}
			
		}
	}
?>