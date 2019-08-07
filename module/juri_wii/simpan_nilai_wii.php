<div class="content-wrapper">
   <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">            
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                    <?php  
						include_once 'module/koneksi.php';

						//untuk id
						$id_user = $_SESSION["username"];
						$nim = $_POST['nim'];
						
						//data dinamika kelompk
						$wii_b = $_POST['wii'];
						$wii = round($wii_b * (5/100));

						
						$query_update = "UPDATE peserta SET s_juri_wii='sudah' WHERE nim='$nim'";
						$hasil_update = mysqli_query($koneksi, $query_update);

						$query_update_status_k2a = mysqli_query($koneksi, "UPDATE penyisihan SET `wii`='$wii', `status_juri_wii`='sudah' WHERE `alternatif`='$nim'");

						$query_k1 = mysqli_query($koneksi, "SELECT * FROM penyisihan where `alternatif`='$nim'");
						while ($row = mysqli_fetch_array($query_k1)) {
							$test_tertulis = $row['test_tertulis'];
							$psikotest = $row['psikotest'];
							$wii = $row['wii'];								
						}
						
						// $total_p_wii = $wii * (5/100);
						$total_k1 = ($test_tertulis + $psikotest + $wii)/3;					
						$insert_k1 = mysqli_query($koneksi, "UPDATE penyisihan SET `total`='$total_k1' WHERE `alternatif`='$nim'");

						$ubah_s_final = mysqli_query($koneksi, "SELECT * FROM peserta WHERE nim='$nim'");
						while ($row = mysqli_fetch_array($ubah_s_final)) {
							$sjt = $row['s_juri_tertulis'];
							$psiko = $row['s_juri_psikotest'];
							$wii = $row['s_juri_wii'];
						}

						
						if ($sjt == "sudah" && $psiko == "sudah" && $wii == "sudah") {
							
							$ganti_s_final = mysqli_query($koneksi, "UPDATE peserta SET s_final='sudah'");
							$ambil = mysqli_query($koneksi, "SELECT * FROM penyisihan ORDER BY total desc limit 30");
							while ($rh = mysqli_fetch_array($ambil)) {
								$alternatif = $rh['alternatif'];
								$jk = $rh['jk'];
								
								$simpan = mysqli_query($koneksi, "INSERT INTO alternatif (`alternatif`, `jk`, `user`) VALUES ('$alternatif', '$jk', '$id_user')");
								// $simpan2 = mysqli_query($koneksi, "INSERT INTO nilai_bing (`alternatif`, `id_user`) VALUES ('$alternatif', '$id_user')");
								// $simpan3 = mysqli_query($koneksi, "INSERT INTO nilai_kebudayaan (`alternatif`, `id_user`) VALUES ('$alternatif', '$id_user')");
								// $simpan4 = mysqli_query($koneksi, "INSERT INTO nilai_kepemudaan (`alternatif`, `id_user`) VALUES ('$alternatif', '$id_user')");
								// $simpan5 = mysqli_query($koneksi, "INSERT INTO nilai_akademik (`alternatif`, `id_user`) VALUES ('$alternatif', '$id_user')");
								// $simpan6 = mysqli_query($koneksi, "INSERT INTO nilai_psiko (`alternatif`, `id_user`) VALUES ('$alternatif', '$id_user')");
							}
							
						}

						echo "<script>window.location.href = '?module=input_nilai';</script>";


					?>
                </div>
              </div>           
            </div>
          </div>         
        </div>       
      </div>           
    </section>
</div>