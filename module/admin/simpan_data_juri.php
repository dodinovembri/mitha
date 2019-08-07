<?php
	include 'module/koneksi.php'; 

	$username = $_POST['username'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];	
	$password = md5($_POST['password']);
	$id_role = $_POST['id_role'];
	

	$query_cek = "SELECT * FROM user WHERE username='$username'";
	$hasil_cek = mysqli_query($koneksi, $query_cek);

	while ($username_d = mysqli_fetch_array($hasil_cek)) {
		$username_db = $username_d['username'];
	}
	
	if ($username_db == $username) {
		echo "<script>
					window.alert('Data user Sudah Ada Dalam Database');
					window.location.href = '?module=input_data_user';
			 </script>";
	}
	else{
		
		$query_user = "INSERT INTO user (`username`, `nama`, `jabatan`, `photo`, `password`, `id_role`) VALUES ('$username', '$nama', '', '', '$password', '$id_role' )";
		$hasil_user = mysqli_query($koneksi, $query_user);		

		echo "<script>					
					window.location.href = '?module=data_juri';
			 </script>";
	}
	
?>