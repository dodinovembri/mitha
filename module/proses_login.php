<?php  
	include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");

$id_role = "";
while ($row = mysqli_fetch_array($query)) {
	$id_role = $row['id_role'];
	// echo $id_role;
}

if ($id_role == 1) {
	session_start();
	$_SESSION["username"] = $username;	
	$_SESSION['id_role'] = 1;
	
	header("location: ../admin.php");
}

// awal dari juri
else if ($id_role == 2) {
	session_start();
	$_SESSION["username"] = $username;	
	$_SESSION['id_role'] = 2;	
	header("location: ../juri_bing.php");
}
else if ($id_role == 4) {
	session_start();
	$_SESSION["username"] = $username;	
	$_SESSION['id_role'] = 4;	
	header("location: ../juri_psikologi.php");
}
else if ($id_role == 5) {
	session_start();
	$_SESSION["username"] = $username;	
	$_SESSION['id_role'] = 5;	
	header("location: ../juri_akademik.php");
}
else if ($id_role == 6) {
	session_start();
	$_SESSION["username"] = $username;	
	$_SESSION['id_role'] = 6;	
	header("location: ../juri_kebudayaan.php");
}
else if ($id_role == 7) {
	session_start();
	$_SESSION["username"] = $username;	
	$_SESSION['id_role'] = 7;	
	header("location: ../juri_kepemudaan.php");
}
else if ($id_role == 8) {
	session_start();
	$_SESSION["username"] = $username;	
	$_SESSION['id_role'] = 8;	
	header("location: ../juri_tertulis.php");
}
else if ($id_role == 9) {
	session_start();
	$_SESSION["username"] = $username;	
	$_SESSION['id_role'] = 9;	
	header("location: ../juri_psikotest.php");
}
else if ($id_role == 10) {
	session_start();
	$_SESSION["username"] = $username;	
	$_SESSION['id_role'] = 10;	
	header("location: ../juri_wii.php");
}
// akhir dari peerolehan juri

else if ($id_role == 3) {
	session_start();
	$_SESSION["username"] = $username;	
	$_SESSION['id_role'] = 3;	
	header("location: ../dpo.php");
}
else{
	echo "<script>
			window.alert('Username Atau Password Salah!');
			window.location.href = '../index.php';
		</script>";
}
?>