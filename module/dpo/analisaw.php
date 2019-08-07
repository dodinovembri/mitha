<div class="content-wrapper">
   <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">            
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
								echo "</table><hr>";
								//vektor v
								echo "<b>Hasil Akhir Analisa Laki-Laki</b></br>";
								echo "<table class='table table-striped table-bordered table-hover'>";
								echo "<thead style='background-color: #8A2BE2;'><tr><th>Alternatif</th><th>V</th><th>Ranking</th><th>Actions</th></tr></thead>";
								$ranking = 0;
								for($i=0;$i<$arl2;$i++){ 
									$ranking++;
									if($i==0){
										echo "<tr><td>".$nama_alternatif[array_search((end($v)), $v)]."</td>";
										echo "<td>".current($v)."</td>";
										echo "<td>".$ranking."</td>";														
										// echo "<td><a onclick='return konfirmasi()' href='?module=ubah&id=".$nama_alternatif[array_search((end($v)), $v)]."'>Tolak</a></td></tr>";
									}															
									elseif($i==($arl2-1)){	
										echo "<tr><td>".$nama_alternatif[array_search((prev($v)), $v)]."</td>";
										echo "<td>".current($v)."</td>";
										echo "<td>".$ranking."</td>";	
										// echo "<td><a onclick='return konfirmasi()' href='?module=ubah&id=".$nama_alternatif[array_search((end($v)), $v)]."'>Tolak</a></td></tr>";
									}												
									else{	
										echo "<tr><td>".$nama_alternatif[array_search((prev($v)), $v)]."</td>";
										echo "<td>".current($v)."</td>";
										echo "<td>".$ranking."</td>";							
										// echo "<td><a onclick='return konfirmasi()' href='?module=ubah&id=".$nama_alternatif[array_search((end($v)), $v)]."'>Tolak</a></td></tr>";
									}
								}
								echo "</table><hr>";
			
								function jml_kriteria(){	
									include 'module/koneksi.php';
									$kriteria = mysqli_query($koneksi, "select * from kriteria");
									return $kriteria->num_rows;
								}
								
								function jml_alternatif(){	
									include 'module/koneksi.php';
									$alternatif = mysqli_query($koneksi, "select * from alternatif where jk='L' AND s_alternatif='sudah'");
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
									$alternatif = mysqli_query($koneksi, "select * from alternatif where jk='L' AND s_alternatif='sudah'");
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
									$alternatif = mysqli_query($koneksi, "select * from alternatif where jk='L' AND s_alternatif='sudah'");
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
								echo "</table><hr>";
								//vektor v
								echo "<b>Hasil Akhir Analisa Perempuan</b></br>";
								echo "<table class='table table-striped table-bordered table-hover'>";
								echo "<thead style='background-color: #8A2BE2;'><tr><th>Alternatif</th><th>V</th><th>Rangking</th></tr></thead>";
								$ranking_p = 0;
								for($i=0;$i<$arl2_p;$i++){ 
									$ranking_p++;
									if($i==0){
										echo "<tr><td>".$nama_alternatif_p[array_search((end($v_p)), $v_p)]."</td>";
										echo "<td>".current($v_p)."</td>";
										echo "<td>".$ranking_p."</td></tr>";
									}												
									elseif($i==($arl2_p-1)){	
										echo "<tr><td>".$nama_alternatif_p[array_search((prev($v_p)), $v_p)]."</td>";
										echo "<td>".current($v_p)."</td>";
										echo "<td>".$ranking_p."</td></tr>";			
									}												
									else{	
										echo "<tr><td>".$nama_alternatif_p[array_search((prev($v_p)), $v_p)]."</td>";
										echo "<td>".current($v_p)."</td>";
										echo "<td>".$ranking_p."</td></tr>";						
									}
								}
								echo "</table><hr>";
			
								function jml_kriteria_p(){	
									include 'module/koneksi.php';
									$kriteria_p = mysqli_query($koneksi, "select * from kriteria");
									return $kriteria_p->num_rows;
								}
								
								function jml_alternatif_p(){	
									include 'module/koneksi.php';
									$alternatif_p = mysqli_query($koneksi, "select * from alternatif where jk='P' AND s_alternatif='sudah'");
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
									$alternatif_p = mysqli_query($koneksi, "select * from alternatif where jk='P' AND s_alternatif='sudah'");
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
									$alternatif_p = mysqli_query($koneksi, "select * from alternatif where jk='P' AND s_alternatif='sudah'");
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
    </section>
</div>

<?php include 'module/templates/footer.php'; ?>