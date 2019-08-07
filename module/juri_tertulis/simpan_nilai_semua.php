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
                        
                        // $alternatif = $_POST['alternatif'];
                        
                        $nilai = $_POST['nilai'];                             
                       
                        foreach ($nilai as $nilai_key => $nilai_value) {
                            $tertulis = round($nilai_value * (60/100));
                            $query_nilai = "UPDATE `penyisihan` SET `test_tertulis` =  '$tertulis' WHERE `alternatif` = '$nilai_key' LIMIT 1 ;";
                            $result_nilai = mysqli_query($koneksi, $query_nilai);
                            $query_nilai = mysqli_query($koneksi, "UPDATE `peserta` SET `s_juri_tertulis` =  'sudah' WHERE `nim` = '$nilai_key' LIMIT 1 ;");                    
                            $query_2 = mysqli_query($koneksi, "UPDATE `penyisihan` SET `status_juri_tertulis` =  'sudah' WHERE `alternatif` = '$nilai_key' LIMIT 1 ;");                    
                            
                            $query_k1 = mysqli_query($koneksi, "SELECT * FROM penyisihan where `alternatif`='$nilai_key'");
                            while ($row = mysqli_fetch_array($query_k1)) {
                              $test_tertulis = $row['test_tertulis'];
                              $psikotest = $row['psikotest'];
                              $wii = $row['wii'];								
                            }
                            
                            $total_k1 = ($test_tertulis + $psikotest + $wii)/3;						
                            $insert_k1 = mysqli_query($koneksi, "UPDATE penyisihan SET `total`='$total_k1' WHERE `alternatif`='$nilai_key'");           
                            }                           
                            echo "<script>window.location.href = '?module=home';</script>";
					?>
                </div>
              </div>           
            </div>
          </div>         
        </div>       
      </div>           
    </section>
</div>