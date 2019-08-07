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
						$nim = $_POST['nim'];
												
						//data untuk presentasi Program Kerja
						$n_leadership_proker = $_POST['n_leadership_proker'];
						$n_public_speaking_proker = $_POST['n_public_speaking_proker'];
						$n_penampilan = $_POST['n_penampilan'];
						$n_isi_materi = $_POST['n_isi_materi'];
						$proker_b = $n_leadership_proker + $n_public_speaking_proker + $n_penampilan + $n_isi_materi;
						$proker = round($proker_b);						

						$query_update_status_k2a = mysqli_query($koneksi, "UPDATE alternatif SET `k3_psiko`='$proker', `s_k3_psiko`='sudah' WHERE `alternatif`='$nim'");

						$query_k1 = mysqli_query($koneksi, "SELECT * FROM alternatif where `alternatif`='$nim'");
						while ($row = mysqli_fetch_array($query_k1)) {
							$k1_bing = $row['k1_bing'];
							$k1_psiko = $row['k1_psiko'];
							$k1_akademik = $row['k1_akademik'];
							$k1_kebudayaan = $row['k1_kebudayaan'];
							$k1_kepemudaan = $row['k1_kepemudaan'];

							$k2a_bing = $row['k2a_bing'];
							$k2b_psiko = $row['k2b_psiko'];
							$k2c_akademik = $row['k2c_akademik'];
							$k2d_kebudayaan = $row['k2d_kebudayaan'];
							$k2e_kepemudaan = $row['k2e_kepemudaan'];

							$k3_bing = $row['k3_bing'];
							$k3_psiko = $row['k3_psiko'];
							$k3_akademik = $row['k3_akademik'];
							$k3_kebudayaan = $row['k3_kebudayaan'];
							$k3_kepemudaan = $row['k3_kepemudaan'];

								
						}
						
						$total_k1 = ($k1_bing + $k1_psiko + $k1_akademik + $k1_kebudayaan + $k1_kepemudaan)/5;
						$insert_k1 = mysqli_query($koneksi, "UPDATE alternatif SET `k1`='$total_k1' WHERE `alternatif`='$nim'");

						$total_k2 = ($k2a_bing + $k2b_psiko + $k2c_akademik + $k2d_kebudayaan + $k2e_kepemudaan)/5;
						$insert_k2 = mysqli_query($koneksi, "UPDATE alternatif SET `k2`='$total_k2' WHERE `alternatif`='$nim'");

						$total_k3 = ($k3_bing + $k3_psiko + $k3_akademik + $k3_kebudayaan + $k3_kepemudaan)/5;
						$insert_k3 = mysqli_query($koneksi, "UPDATE alternatif SET `k3`='$total_k3' WHERE `alternatif`='$nim'");
						
						$query_update_s = mysqli_query($koneksi, "SELECT * FROM alternatif");
						while ($row_query_update_s = mysqli_fetch_array($query_update_s)) {
							$s_k1_bing = $row_query_update_s['s_k1_bing'];
							$s_k2a_bing = $row_query_update_s['s_k2a_bing'];
							$s_k3_bing = $row_query_update_s['s_k3_bing'];
							$s_k1_psiko = $row_query_update_s['s_k1_psiko'];
							$s_k2b_psiko = $row_query_update_s['s_k2b_psiko'];
							$s_k3_psiko = $row_query_update_s['s_k3_psiko'];
							$s_k1_akademik = $row_query_update_s['s_k1_akademik'];
							$s_k2c_akademik = $row_query_update_s['s_k2c_akademik'];
							$s_k3_akademik = $row_query_update_s['s_k3_akademik'];
							$s_k1_kebudayaan = $row_query_update_s['s_k1_kebudayaan'];
							$s_k2d_kebudayaan = $row_query_update_s['s_k2d_kebudayaan'];
							$s_k3_kebudayaan = $row_query_update_s['s_k3_kebudayaan'];
							$s_k1_kepemudaan = $row_query_update_s['s_k1_kepemudaan'];
							$s_k2e_kepemudaan = $row_query_update_s['s_k2e_kepemudaan'];
							$s_k3_kepemudaan = $row_query_update_s['s_k3_kepemudaan'];							
						}

						if ($s_k1_bing = "sudah" && $s_k2a_bing = "sudah" && $s_k3_bing = "sudah" && $s_k1_psiko = "sudah" && $s_k2b_psiko = "sudah" && $s_k3_psiko = "sudah" && $s_k1_akademik = "sudah" && $s_k2c_akademik = "sudah" && $s_k3_akademik = "sudah" && $s_k1_kebudayaan = "sudah" && $s_k2d_kebudayaan = "sudah" && $s_k3_kebudayaan = "sudah" && $s_k1_kepemudaan = "sudah" && $s_k2e_kepemudaan = "sudah" && $s_k3_kepemudaan = "sudah") {							

							$insert_status_alternatif = mysqli_query($koneksi, "UPDATE alternatif SET s_alternatif='sudah' where `alternatif`='$nim'");
							
						}

						echo "<script>window.location.href = '?module=nilai_semifinal_proker';</script>";


					?>
                </div>
              </div>           
            </div>
          </div>         
        </div>       
      </div>           
    </section>
</div>