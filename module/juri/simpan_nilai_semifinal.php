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
						
						//data dinamika kelompk
						$n_leadership = $_POST['n_leadership'];
						$n_public_speaking = $_POST['n_public_speaking'];
						$n_isi_proker = $_POST['n_isi_proker'];
						$n_teamwork = $_POST['n_teamwork'];
						$dinamika_kelompok_b = $n_leadership + $n_public_speaking + $n_isi_proker + $n_teamwork;
						$dinamika_kelompok = round($dinamika_kelompok_b);
						// echo $dinamika_kelompok;

						//data untuk test wawancara
						//bahasa inggris
						$n_fluency = $_POST['n_fluency'];
						$n_information = $_POST['n_information'];
						$n_pronouncation = $_POST['n_pronouncation'];
						$n_presentation = $_POST['n_presentation'];
						$bahasa_inggris_b = $n_fluency + $n_information + $n_pronouncation + $n_presentation;
						//menghitung presentase
						$p_fluency = $n_fluency * (35/100);
						$p_information = $n_information * (30/100);
						$p_pronouncation = $n_pronouncation * (25/100);
						$p_presentation = $n_presentation * (10/100);						
						$bahasa_inggris_c = $p_fluency + $p_information + $p_pronouncation + $p_presentation;
						$bahasa_inggris = round($bahasa_inggris_c);
						//akademik
						$n_brain = $_POST['n_brain'];
						$n_attitude = $_POST['n_attitude'];
						$n_appearance = $_POST['n_appearance'];
						$n_confidence = $_POST['n_confidence'];
						$akademik_b = $n_brain + $n_attitude + $n_appearance + $n_confidence;
						//menghitung presentase
						$p_brain = $n_brain * (60/100);
						$p_attitude = $n_attitude * (20/100);
						$p_appearance = $n_appearance * (10/100);
						$p_confidence = $n_confidence * (10/100);
						$akademik_c = $p_brain + $p_attitude + $p_appearance + $p_confidence;
						$akademik = round($akademik_c);
						//kebudayaan
						$n_brain_kebudayaan = $_POST['n_brain_kebudayaan'];
						$n_behavior_kebudayaan = $_POST['n_behavior_kebudayaan'];
						$n_kompetensi_kebudayaan = $_POST['n_kompetensi_kebudayaan'];
						$n_integritas_kebudayaan = $_POST['n_integritas_kebudayaan'];	
						$kebudayaan_b = $n_brain_kebudayaan + $n_behavior_kebudayaan + $n_kompetensi_kebudayaan + $n_integritas_kebudayaan;
						//menghitung presentase
						$p_brain_kebudayaan = $n_brain_kebudayaan * (25/100);
						$p_behavior_kebudayaan = $n_behavior_kebudayaan * (25/100);
						$p_kompetensi_kebudayaan = $n_kompetensi_kebudayaan * (25/100);
						$p_integritas_kebudayaan = $n_integritas_kebudayaan * (25/100);
						$kebudayaan_c = $p_brain_kebudayaan + $p_behavior_kebudayaan + $p_kompetensi_kebudayaan + $p_integritas_kebudayaan;
						$kebudayaan = round($kebudayaan_c);
						//psikologi
						$n_iq = $_POST['n_iq'];
						$n_klasifikasi = $_POST['n_klasifikasi'];				
						$n_kepribadian = $_POST['n_kepribadian'];
						$psikologi_b = $n_iq + $n_klasifikasi + $n_kepribadian;
						//menghitung presentase
						$p_iq = $n_iq * (30/100);
						$p_klasifikasi = $n_klasifikasi * (30/100);
						$p_kepribadian = $n_kepribadian * (40/100);
						$psikologi_c = $p_iq + $p_klasifikasi + $p_kepribadian;
						$psikologi = round($psikologi_c);
						//kepemudaan
						$n_brain_kepemudaan = $_POST['n_brain_kepemudaan'];
						$n_behavior_kepemudaan = $_POST['n_behavior_kepemudaan'];
						$n_performance_kepemudaan = $_POST['n_performance_kepemudaan'];
						$n_confidence_kepemudaan = $_POST['n_confidence_kepemudaan'];
						$kepemudaan_b = $n_brain_kepemudaan + $n_behavior_kepemudaan + $n_performance_kepemudaan + $n_confidence_kepemudaan;
						//menghitung presentase
						$p_brain_kepemudaan = $n_brain_kepemudaan * (25/100);
						$p_behavior_kepemudaan = $n_behavior_kepemudaan * (25/100);
						$p_performance_kepemudaan = $n_performance_kepemudaan * (25/100);
						$p_confidence_kepemudaan = $n_confidence_kepemudaan * (25/100);
						$kepemudaan_c = $p_brain_kepemudaan + $p_behavior_kepemudaan + $p_performance_kepemudaan + $p_confidence_kepemudaan;
						$kepemudaan = round($kepemudaan_c);

						//total dari test wawancara
						$total_p_ww = $bahasa_inggris + $akademik + $kebudayaan + $psikologi + $kepemudaan;
						// echo $total_p_ww;


						//data untuk presentasi Program Kerja
						$n_leadership_proker = $_POST['n_leadership_proker'];
						$n_public_speaking_proker = $_POST['n_public_speaking_proker'];
						$n_penampilan = $_POST['n_penampilan'];
						$n_isi_materi = $_POST['n_isi_materi'];
						$proker_b = $n_leadership_proker + $n_public_speaking_proker + $n_penampilan + $n_isi_materi;
						$proker = round($proker_b);						

						$query = "INSERT INTO alternatif (`alternatif`, `k1`, `k2`, `k3`) VALUES ('$nim', '$dinamika_kelompok', '$total_p_ww', '$proker')";
						$hasil = mysqli_query($koneksi, $query);

						$query_update = "UPDATE peserta SET status='sudah' WHERE nim='$nim'";
						$hasil_update = mysqli_query($koneksi, $query_update);

						echo "<script>window.location.href = '?module=nilai_semifinal';</script>";


					?>
                </div>
              </div>           
            </div>
          </div>         
        </div>       
      </div>           
    </section>
</div>