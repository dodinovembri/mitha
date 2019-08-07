<script type="text/javascript" language="JavaScript">
 function konfirmasi()
 {
 tanya = confirm("Anda Yakin Akan Mengubah Data ?");
 if (tanya == true) return true;
 else return false;
 }</script>

  <!-- Start Reservation section -->
  <?php include 'module/koneksi.php';   
  $hapus = mysqli_query($koneksi, "TRUNCATE TABLE nilai");
  ?>
  
   <section id="mu-reservation">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-reservation-area">
            <div class="mu-title">
              <span class="mu-subtitle">Bujang Gadis Kampus</span>
              <h2>Sumatera Selatan</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>
            <div class="mu-reservation-content">
			<div class="box-body">
              <div class="row"> 
              	<div class="col-md-12">
								<a href="module/dpo/cetak_semifinal.php" target="_blank"><button type="button" class="btn btn-primary">Cetak Laporan</button></a>
								</div>          
                <div class="col-md-6">      
				  <div class="panel-body">						
						<center> 
						<?php											
							$alt = get_alternatif();
							$nama_alternatif = get_nama_alternatif();
							end($nama_alternatif); $arl2 = key($nama_alternatif)+1; //new
							$kep = get_kepentingan();
							$cb = get_costbenefit();
							$k = jml_kriteria();
							$a = jml_alternatif();
							$t_kepentingan = 0;
							$tb_kepentingan = 0;
							
								for($i=0;$i<$k;$i++){
									$t_kepentingan = $t_kepentingan + $kep[$i];
								}
								for($i=0;$i<$k;$i++){
									$b_kepentingan[$i] = ($kep[$i]/$t_kepentingan);
									$tb_kepentingan = $tb_kepentingan + $b_kepentingan[$i];
								}
								for($i=0;$i<$k;$i++){
									if($cb[$i]=="cost"){
										$pangkat[$i] = (-1) * $b_kepentingan[$i];
									}
									else{
										$pangkat[$i] = $b_kepentingan[$i];
									}
								}
							for($i=0;$i<$a;$i++){
								for($j=0;$j<$k;$j++){
									$s[$i][$j] = pow(($alt[$i][$j]),$pangkat[$j]);
								}
								$ss[$i] = $s[$i][0]*$s[$i][1]*$s[$i][2];
							}
							//PERHITUNGAN VEKTOR
							$total = 0;
							for($i=0;$i<$a;$i++){
								$total = $total + $ss[$i];
							}
							for($i=0;$i<$a;$i++){					
								$v[$i] = round($ss[$i]/$total,6);						
							}									
							uasort($v,'cmp');
								
								$ranking = 0;
								for($i=0;$i<$arl2;$i++){ 
									$ranking++;
									if($i==0){ 
										$a = $nama_alternatif[array_search((end($v)), $v)];
										$b = current($v);
										$rank_a = $ranking;
										?>
										<!-- <tr><td><a href="?module=ubah&id=<?php echo $a; ?>"><?php echo $a." | Terima/Tolak?"; ?></a></td>;  -->
											<?php
										// echo "<td>".$b."</td>";
										// echo "<td>".$ranking."</td>";	

										$sql1 = mysqli_query($koneksi, "INSERT INTO nilai (`no_peserta`, `nilai`, `rank`) VALUES ('$a', '$b', '$rank_a')");
									}															
									elseif($i==($arl2-1)){	
										$c = $nama_alternatif[array_search((prev($v)), $v)];
										$d = current($v);
										$rank_b = $ranking;
										?>
										<tr>
											<!-- <td><a href="#"><?php echo $c; ?></a></td>;  -->
											<?php									
										
										// echo "<td>".$d."</td>";
										// echo "<td>".$ranking."</td>";
										$sql2 = mysqli_query($koneksi, "INSERT INTO nilai (`no_peserta`, `nilai`, `rank`) VALUES ('$c', '$d', '$rank_b')");	
										// echo "<td><a onclick='return konfirmasi()' href='?module=ubah&id=".$nama_alternatif[array_search((end($v)), $v)]."'>Tolak</a></td></tr>";
									}												
									else{	
										$e = $nama_alternatif[array_search((prev($v)), $v)];
										$f = current($v);
										$rank_c = $ranking;
										?>
										<!-- <tr><td><a href="#"><?php echo $e; ?></a></td>;  -->
											<?php													
										// echo "<td>".$f."</td>";
										// echo "<td>".$ranking."</td>";							
										$sql3 = mysqli_query($koneksi, "INSERT INTO nilai (`no_peserta`, `nilai`, `rank`) VALUES ('$e', '$f', '$rank_c')");
										// echo "<td><a onclick='return konfirmasi()' href='?module=ubah&id=".$nama_alternatif[array_search((end($v)), $v)]."'>Tolak</a></td></tr>";
									}
								}
								echo "</table><hr>";
								//vektor v
								echo "<b style='color:#ffffff;'>Hasil Akhir Analisa Laki-Laki</b></br>";
								echo "<table class='table table-striped table-bordered table-hover' style='background-color: #bb9e5d;'>";
								echo "<thead style='background-color: #8A2BE2;'><tr><th>Alternatif</th><th>Nama</th><th>Nilai Akhir</th><th>Ranking</th><th>Actions</th></tr></thead><br>"; 
								$ambil = mysqli_query($koneksi, "SELECT nilai.*, alternatif.*, peserta.* FROM nilai JOIN alternatif ON nilai.no_peserta=alternatif.alternatif JOIN peserta ON alternatif.alternatif = peserta.nim WHERE nilai.no_peserta=alternatif.alternatif AND alternatif.jk='L' AND alternatif.tolak='no' ORDER BY rank ASC");														
								while ($roww = mysqli_fetch_array($ambil)) { ?>
									<tr>
										<td><?php echo $roww['no_peserta']; ?></td>
										<td><?php echo $roww['nama']; ?></td>
										<td><?php echo $roww['nilai']; ?></td>
										<td><?php echo $roww['rank']; ?></td>
										<td><?php if ($roww['ket'] == NULL) { ?>
											<a onclick="return konfirmasi()" href="?module=ubah_t&id=<?php echo $roww['no_peserta'] ?>">Terima</a> | <a onclick="return konfirmasi()" href="?module=ubah&id=<?php echo $roww['no_peserta'] ?>">Tolak</a>
										<?php }
										else{
											echo '<span class="glyphicon glyphicon-ok"></span>';
										} ?></td>
									</tr>
								<?php }
								echo "</table><hr>";
			
								function jml_kriteria(){	
									include 'module/koneksi.php';
									$kriteria = mysqli_query($koneksi, "select * from kriteria");
									return $kriteria->num_rows;
								}
								
								function jml_alternatif(){	
									include 'module/koneksi.php';
									$alternatif = mysqli_query($koneksi, "select * from alternatif where jk='L' AND s_alternatif='sudah' AND tolak='no'");
									return $alternatif->num_rows;
								}
								
								function get_kepentingan(){
									include 'module/koneksi.php';
									$kepentingan = mysqli_query($koneksi, "select * from kriteria");
									if(!$kepentingan){
										echo $mysqli->connect_errno." - ".$mysqli->connect_error;
										exit();
									}
									$i=0;
									while ($row = $kepentingan->fetch_assoc()) {
										@$kep[$i] = $row["kepentingan"];
										$i++;
									}
									return $kep;
								}
								
								function get_costbenefit(){
									include 'module/koneksi.php';
									$costbenefit = mysqli_query($koneksi, "select * from kriteria");
									if(!$costbenefit){
										echo $mysqli->connect_errno." - ".$mysqli->connect_error;
										exit();
									}
									$i=0;
									while ($row = $costbenefit->fetch_assoc()) {
										@$cb[$i] = $row["cost_benefit"];
										$i++;
									}
									return $cb;
								}
								
								function get_nama_alternatif(){
									include 'module/koneksi.php';
									$alternatif = mysqli_query($koneksi, "select * from alternatif where jk='L' AND s_alternatif='sudah' AND tolak='no'");
									if(!$alternatif){
										echo $mysqli->connect_errno." - ".$mysqli->connect_error;
										exit();
									}
									$i=0;
									while ($row = $alternatif->fetch_assoc()) {
										@$alt[$i] = $row["alternatif"];
										$i++;
									}
									return $alt;
								}
								
								function get_alternatif(){
									include 'module/koneksi.php';
									$alternatif = mysqli_query($koneksi, "select * from alternatif where jk='L' AND s_alternatif='sudah' AND tolak='no'");
									if(!$alternatif){
										echo $mysqli->connect_errno." - ".$mysqli->connect_error;
										exit();
									}
									$i=0;
									while ($row = $alternatif->fetch_assoc()) {
										@$alt[$i][0] = $row["k1"];
										@$alt[$i][1] = $row["k2"];
										@$alt[$i][2] = $row["k3"];
										@$alt[$i][3] = $row["k4"];
										@$alt[$i][4] = $row["k5"];
										$i++;
									}
									return $alt;
								}
								
								function cmp($a, $b){
									if ($a == $b) {
										return 0;
									}
									return ($a < $b) ? -1 : 1;
								}

								function print_ar(array $x){	//just for print array
									echo "<pre>";
									print_r($x);
									echo "</pre></br>";
								}
							?>
						</center>
				  </div>	
                </div>
                <div class="col-md-6">
                	<div class="panel-body">				
						<center>
						<?php
							
							$alt_p = get_alternatif_p();
							$nama_alternatif_p = get_nama_alternatif_p();
							end($nama_alternatif_p); 
							$arl2_p = key($nama_alternatif_p)+1; //new
							$kep_p = get_kepentingan_p_p();
							$cb_p = get_costbenefit_p();
							$k_p = jml_kriteria_p();
							$a_p = jml_alternatif_p();
							$t_kepentingan_p = 0;
							$tb_kepentingan_p = 0;
							
								for($i=0;$i<$k_p;$i++){
									$t_kepentingan_p = $t_kepentingan_p + $kep_p[$i];
								}
								for($i=0;$i<$k_p;$i++){
									$b_kepentingan_p[$i] = ($kep_p[$i]/$t_kepentingan_p);
									$tb_kepentingan_p = $tb_kepentingan_p + $b_kepentingan_p[$i];
								}
								for($i=0;$i<$k_p;$i++){
									if($cb_p[$i]=="cost"){
										$pangkat_p[$i] = (-1) * $b_kepentingan_p[$i];
									}
									else{
										$pangkat_p[$i] = $b_kepentingan_p[$i];
									}
								}
							for($i=0;$i<$a_p;$i++){
								for($j=0;$j<$k_p;$j++){
									$s_p[$i][$j] = pow(($alt_p[$i][$j]),$pangkat_p[$j]);
								}
								$ss_p[$i] = $s_p[$i][0]*$s_p[$i][1]*$s_p[$i][2];
							}
							//PERHITUNGAN VEKTOR
							$total_p = 0;
							for($i=0;$i<$a_p;$i++){
								$total_p = $total_p + $ss_p[$i];
							}
							for($i=0;$i<$a_p;$i++){					
								$v_p[$i] = round($ss_p[$i]/$total_p,6);						
							}									
							uasort($v_p,'cmp_p');
													

								$ranking_p = 0;
								for($i=0;$i<$arl2_p;$i++){ 
									$ranking_p++;
									if($i==0){
										$g = $nama_alternatif_p[array_search((end($v_p)), $v_p)];
										$h = current($v_p);
										$rank_d = $ranking_p;
										// echo "<tr><td>".$g."</td>"; 
										// echo "<td>".$h."</td>";
										// echo "<td>".$ranking_p."</td>";
										$sql4 = mysqli_query($koneksi, "INSERT INTO nilai (`no_peserta`, `nilai`, `rank`) VALUES ('$g', '$h', '$rank_d')");
										// echo "<td><a onclick='return konfirmasi()' href='?module=ubah&id=".$nama_alternatif_p[array_search((end($v_p)), $v_p)]."'>Tolak</a></td></tr>";
									}												
									elseif($i==($arl2_p-1)){	
										$i = $nama_alternatif_p[array_search((prev($v_p)), $v_p)];
										$j = current($v_p);
										$rank_e = $ranking_p;
										// echo "<tr><td>".$i."</td>";
										// echo "<td>".$j."</td>";
										// echo "<td>".$ranking_p."</td>";	
										$sql5 = mysqli_query($koneksi, "INSERT INTO nilai (`no_peserta`, `nilai`, `rank`) VALUES ('$i', '$j', '$rank_e')");		
										// echo "<td><a onclick='return konfirmasi()' href='?module=ubah&id=".$nama_alternatif_p[array_search((end($v_p)), $v_p)]."'>Tolak</a></td></tr>";
									}												
									else{
										$k = $nama_alternatif_p[array_search((prev($v_p)), $v_p)];
										$l = current($v_p);
										$rank_f = $ranking_p;
										// echo "<tr><td>".$k."</td>";
										// echo "<td>".$l."</td>";
										// echo "<td>".$ranking_p."</td>";			
										$sql6 = mysqli_query($koneksi, "INSERT INTO nilai (`no_peserta`, `nilai`, `rank`) VALUES ('$k', '$l', '$rank_f')");			
										// echo "<td><a onclick='return konfirmasi()' href='?module=ubah&id=".$nama_alternatif_p[array_search((end($v_p)), $v_p)]."'>Tolak</a></td></tr>";
									}
								}
								echo "</table><hr>";
								//vektor v
								echo "<b style='color:#ffffff;'>Hasil Akhir Analisa Perempuan</b></br>";
								echo "<table class='table table-striped table-bordered table-hover' style='background-color: #bb9e5d;'>";
								echo "<thead style='background-color: #8A2BE2;'><tr><th>Alternatif</th><th>Nama</th><th>Nilai Akhir</th><th>Rangking</th><th>Actions</th></tr></thead><br>";

								$ambil_p = mysqli_query($koneksi, "SELECT nilai.*, alternatif.*, peserta.* FROM nilai JOIN alternatif ON nilai.no_peserta=alternatif.alternatif JOIN peserta ON alternatif.alternatif = peserta.nim WHERE nilai.no_peserta=alternatif.alternatif AND alternatif.jk='P' AND alternatif.tolak='no' ORDER BY rank ASC");
								while ($roww = mysqli_fetch_array($ambil_p)) { ?>
									<tr>
										<td><?php echo $roww['no_peserta']; ?></td>
										<td><?php echo $roww['nama']; ?></td>
										<td><?php echo $roww['nilai']; ?></td>
										<td><?php echo $roww['rank']; ?></td>
										<td><?php if ($roww['ket'] == NULL) { ?>
											<a onclick="return konfirmasi()" href="?module=ubah_t&id=<?php echo $roww['no_peserta'] ?>">Terima</a> | <a onclick="return konfirmasi()" href="?module=ubah&id=<?php echo $roww['no_peserta'] ?>">Tolak</a>
										<?php }
										else{
											echo '<span class="glyphicon glyphicon-ok"></span>';
										} ?></td>
									</tr>
								<?php }
								echo "</table><hr>";
			
								function jml_kriteria_p(){	
									include 'module/koneksi.php';
									$kriteria_p = mysqli_query($koneksi, "select * from kriteria");
									return $kriteria_p->num_rows;
								}
								
								function jml_alternatif_p(){	
									include 'module/koneksi.php';
									$alternatif_p = mysqli_query($koneksi, "select * from alternatif where jk='P' AND s_alternatif='sudah' AND tolak='no'");
									return $alternatif_p->num_rows;
								}
								
								function get_kepentingan_p_p(){
									include 'module/koneksi.php';
									$kepentingan_p = mysqli_query($koneksi, "select * from kriteria");
									if(!$kepentingan_p){
										echo $mysqli->connect_errno." - ".$mysqli->connect_error;
										exit();
									}
									$i=0;
									while ($row = $kepentingan_p->fetch_assoc()) {
										@$kep_p[$i] = $row["kepentingan"];
										$i++;
									}
									return $kep_p;
								}
								
								function get_costbenefit_p(){
									include 'module/koneksi.php';
									$costbenefit_p = mysqli_query($koneksi, "select * from kriteria");
									if(!$costbenefit_p){
										echo $mysqli->connect_errno." - ".$mysqli->connect_error;
										exit();
									}
									$i=0;
									while ($row = $costbenefit_p->fetch_assoc()) {
										@$cb_p[$i] = $row["cost_benefit"];
										$i++;
									}
									return $cb_p;
								}
								
								function get_nama_alternatif_p(){
									include 'module/koneksi.php';
									$alternatif_p = mysqli_query($koneksi, "select * from alternatif where jk='P' AND s_alternatif='sudah' AND tolak='no'");
									if(!$alternatif_p){
										echo $mysqli->connect_errno." - ".$mysqli->connect_error;
										exit();
									}
									$i=0;
									while ($row = $alternatif_p->fetch_assoc()) {
										@$alt_p[$i] = $row["alternatif"];
										$i++;
									}
									return $alt_p;
								}
								
								function get_alternatif_p(){
									include 'module/koneksi.php';
									$alternatif_p = mysqli_query($koneksi, "select * from alternatif where jk='P' AND s_alternatif='sudah' AND tolak='no'");
									if(!$alternatif_p){
										echo $mysqli->connect_errno." - ".$mysqli->connect_error;
										exit();
									}
									$i=0;
									while ($row = $alternatif_p->fetch_assoc()) {
										@$alt_p[$i][0] = $row["k1"];
										@$alt_p[$i][1] = $row["k2"];
										@$alt_p[$i][2] = $row["k3"];
										@$alt_p[$i][3] = $row["k4"];
										@$alt_p[$i][4] = $row["k5"];
										$i++;
									}
									return $alt_p;
								}
								
								function cmp_p($a_p, $b_p){
									if ($a_p == $b_p) {
										return 0;
									}
									return ($a_p < $b_p) ? -1 : 1;
								}

								function print_ar_p(array $x_p){	//just for print array
									echo "<pre>";
									print_r($x_p);
									echo "</pre></br>";
								}
							?>
						</center>
					</div>
                </div>
              </div>           
            </div>
        </div>
    </div>
</div>
</div>
</div>
</section>