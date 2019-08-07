  <!-- Start Reservation section -->
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
            	<div class="row">
                <div class="col-md-6">                    
					<!-- Default panel contents -->					  
					<div class="panel-body">
				    <center>
					<?php							
						$alt = get_alternatif();
						$alt_name = get_alt_name();
						end($alt_name); $arl2 = key($alt_name)+1; //new
						$kep = get_kepentingan();
						$cb = get_costbenefit();
						$k = jml_kriteria();
						$a = jml_alternatif();
						$t_kepentingan = 0;
						$tb_kepentingan = 0;
						//bobot kepentingan
						echo "<span style='color: red'><b>Laki Laki</b>	</span>";
						echo "<br>";
						echo "<b style='color:#ffffff;'>Perhitungan Bobot Kepentingan</b></br>";
						echo "<table class='table table-striped table-bordered table-hover' style='background-color: #bb9e5d;'>";
						echo "<thead style='background-color: #8A2BE2;'><tr><th></th><th>K1</th><th>K2</th><th>K3</th></tr></thead>";
							echo "<tr><td><b>Kepentingan</b></td>";
							for($i=0;$i<$k;$i++){
								$t_kepentingan = $t_kepentingan + $kep[$i];
								echo "<td>".$kep[$i]."</td>";
							}
							// echo "<td>".$t_kepentingan."</td></tr>";
							echo "<tr><td><b>Bobot</b></td>";
							for($i=0;$i<$k;$i++){
								$b_kepentingan[$i] = ($kep[$i]/$t_kepentingan);
								$tb_kepentingan = $tb_kepentingan + $b_kepentingan[$i];
								echo "<td>".round($b_kepentingan[$i],6)."</td>";
							}
							//perhitungan pangkat
							echo "<tr><td><b>Pangkat</b></td>";
							for($i=0;$i<$k;$i++){
								if($cb[$i]=="cost"){
									$pangkat[$i] = (-1) * $b_kepentingan[$i];
									echo "<td>".round($pangkat[$i],6)."</td>";
								}
								else{
									$pangkat[$i] = $b_kepentingan[$i];
									echo "<td>".round($pangkat[$i],6)."</td>";
								}
							}
							echo "</tr>";
							// echo "<td>".$tb_kepentingan."</td></tr>";
						echo "</table><hr>";
						//pangkat

						echo "<b style='color:#ffffff;'>Matrix Alternatif - Kriteria</b></br>";								
						//matrik alternatif/kriteria
						echo "<table class='table table-striped table-bordered table-hover' style='background-color: #bb9e5d;'>";
						echo "<thead style='background-color: #8A2BE2;'><tr><th>Alternatif / Kriteria</th><th>K1</th><th>K2</th><th>K3</th></tr></thead>";
						for($i=0;$i<$a;$i++){
							echo "<tr><td><b>".$alt_name[$i]."</b></td>";
							for($j=0;$j<$k;$j++){
								echo "<td>".$alt[$i][$j]."</td>";
							}
							echo "</tr>";
						}
						echo "</table><hr>";							
						
						//vektor s
						echo "<b style='color:#ffffff;'>Perhitungan Vektor S</b></br>";
						echo "<table class='table table-striped table-bordered table-hover' style='background-color: #bb9e5d;'>";
						echo "<thead style='background-color: #8A2BE2;'><tr><th>Alternatif</th><th>S</th></tr></thead>";
						for($i=0;$i<$a;$i++){
							echo "<tr><td><b>".$alt_name[$i]."</b></td>";
							for($j=0;$j<$k;$j++){
								$s[$i][$j] = pow(($alt[$i][$j]),$pangkat[$j]);
							}
							$ss[$i] = $s[$i][0]*$s[$i][1]*$s[$i][2];
							echo "<td>".round($ss[$i],6)."</td></tr>";
						}
						echo "</table><hr>";
						
						$total = 0;
						for($i=0;$i<$a;$i++){
							$total = $total + $ss[$i];
						}
						for($i=0;$i<$a;$i++){
							echo "<tr><td><b>".$alt_name[$i]."</b></td>";
							$v[$i] = round($ss[$i]/$total,6);
							echo "<td>".$v[$i]."</td></tr>";
						}						
						//vektor s
						uasort($v,'cmp');

							// echo "</table><hr>";
							// //vektor v
							// echo "<b style='color:#ffffff;'>Hasil Akhir</b></br>";
							// echo "<table class='table table-striped table-bordered table-hover' style='background-color: #bb9e5d;'>";
							// echo "<thead style='background-color: #8A2BE2;'><tr><th>Alternatif</th><th>V</th><th>Ranking</th></tr></thead>";
							// $ranking = 0;
							// for($i=0;$i<$arl2;$i++){ 
							// 	$ranking++;
							// 	if($i==0){
							// 		echo "<tr><td><b>".$alt_name[array_search((end($v)), $v)]."</b></td>";
							// 		echo "<td>".current($v)."</td>";
							// 		echo "<td>".$ranking."</td></tr>";
							// 	}
							// 	elseif($i==($arl2-1)){	
							// 		echo "<tr><td><b>".$alt_name[array_search((prev($v)), $v)]."</b></td>";
							// 		echo "<td>".current($v)."</td>";
							// 		echo "<td>".$ranking."</td></tr>";
							// 	}													
							// 	else{	
							// 		echo "<tr><td><b>".$alt_name[array_search((prev($v)), $v)]."</b></td>";
							// 		echo "<td>".current($v)."</td>";
							// 		echo "<td>".$ranking."</td></tr>";							
							// 	}
							// }
							// echo "</table><hr>";
						
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
									
									function get_alt_name(){
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
							<!-- Default panel contents -->					  
							<div class="panel-body">
								<center>
								<?php							
									$alt_p = get_alternatif_p();
									$alt_name_p = get_alt_name_p();
									end($alt_name_p); 
									$arl2_p = key($alt_name_p)+1; //new
									$kep_p = get_kepentingan_p();
									$cb_p = get_costbenefit_p();
									$k_p = jml_kriteria_p();
									$s_p = jml_alternatif_p();
									$t_kepentingan_p = 0;
									$tb_kepentingan_p = 0;

									//bobot kepentingan
									echo "<span style='color: red'><b>Perempuan</b>	</span>";
									echo "<br>";
									echo "<b style='color:#ffffff;'>Perhitungan Bobot Kepentingan</b></br>";
									echo "<table class='table table-striped table-bordered table-hover' style='background-color: #bb9e5d;'>";
									echo "<thead style='background-color: #DAA520;'><tr><th></th><th>K1</th><th>K2</th><th>K3</th></tr></thead>";
										echo "<tr><td><b>Kepentingan</b></td>";
										for($i=0;$i<$k_p;$i++){
											$t_kepentingan_p = $t_kepentingan_p + $kep_p[$i];
											echo "<td>".$kep_p[$i]."</td>";
										}
										// echo "<td>".$t_kepentingan_p."</td></tr>";
										echo "<tr><td><b>Bobot</b></td>";
										for($i=0;$i<$k_p;$i++){
											$b_kepentingan[$i] = ($kep_p[$i]/$t_kepentingan_p);
											$tb_kepentingan_p = $tb_kepentingan_p + $b_kepentingan[$i];
											echo "<td>".round($b_kepentingan[$i],6)."</td>";
										}
										//perhitungan pangkat
										echo "<tr><td><b>Pangkat</b></td>";
										for($i=0;$i<$k_p;$i++){
											if($cb_p[$i]=="cost"){
												$pangkat[$i] = (-1) * $b_kepentingan[$i];
												echo "<td>".round($pangkat[$i],6)."</td>";
											}
											else{
												$pangkat[$i] = $b_kepentingan[$i];
												echo "<td>".round($pangkat[$i],6)."</td>";
											}
										}
										echo "</tr>";
										// echo "<td>".$tb_kepentingan_p."</td></tr>";
									echo "</table><hr>";
									//pangkat
									
									echo "<b style='color:#ffffff;'>Matrix Alternatif - Kriteria</b></br>";								
									//matrik alternatif/kriteria
									echo "<table class='table table-striped table-bordered table-hover' style='background-color: #bb9e5d;'>";
									echo "<thead style='background-color: #DAA520;'><tr><th>Alternatif / Kriteria</th><th>K1</th><th>K2</th><th>K3</th></tr></thead>";
									for($i=0;$i<$s_p;$i++){
										echo "<tr><td><b>".$alt_name_p[$i]."</b></td>";
										for($j=0;$j<$k_p;$j++){
											echo "<td>".$alt_p[$i][$j]."</td>";
										}
										echo "</tr>";
									}
									echo "</table><hr>";							
									
									//vektor s
									echo "<b style='color:#ffffff;'>Perhitungan Vektor S</b></br>";
									echo "<table class='table table-striped table-bordered table-hover' style='background-color: #bb9e5d;'>";
									echo "<thead style='background-color: #DAA520;'><tr><th>Alternatif</th><th>S</th></tr></thead>";
									for($i=0;$i<$s_p;$i++){
										echo "<tr><td><b>".$alt_name_p[$i]."</b></td>";
										for($j=0;$j<$k_p;$j++){
											$s[$i][$j] = pow(($alt_p[$i][$j]),$pangkat[$j]);
										}
										$ss[$i] = $s[$i][0]*$s[$i][1]*$s[$i][2];
										echo "<td>".round($ss[$i],6)."</td></tr>";
									}
									echo "</table><hr>";
									//vektor v								
									$total = 0;
									for($i=0;$i<$s_p;$i++){
										$total = $total + $ss[$i];
									}
									for($i=0;$i<$s_p;$i++){
										echo "<tr><td><b>".$alt_name_p[$i]."</b></td>";
										$v[$i] = round($ss[$i]/$total,6);
										echo "<td>".$v[$i]."</td></tr>";
									}									
									//vektor s
									uasort($v,'cmp');

										// echo "</table><hr>";
										// //vektor v
										// echo "<b style='color:#ffffff;'>Hasil Akhir</b></br>";
										// echo "<table class='table table-striped table-bordered table-hover' style='background-color: #bb9e5d;'>";
										// echo "<thead style='background-color: #DAA520;'><tr><th>Alternatif</th><th>V</th><th>Ranking</th></tr></thead>";
										// $ranking = 0;
										// for($i=0;$i<$arl2_p;$i++){ 
										// 	$ranking++;
										// 	if($i==0){
										// 		echo "<tr><td><b>".$alt_name_p[array_search((end($v)), $v)]."</b></td>";
										// 		echo "<td>".current($v)."</td>";
										// 		echo "<td>".$ranking."</td></tr>";
										// 	}
										// 	elseif($i==($arl2_p-1)){	
										// 		echo "<tr><td><b>".$alt_name_p[array_search((prev($v)), $v)]."</b></td>";
										// 		echo "<td>".current($v)."</td>";
										// 		echo "<td>".$ranking."</td></tr>";
										// 	}													
										// 	else{	
										// 		echo "<tr><td><b>".$alt_name_p[array_search((prev($v)), $v)]."</b></td>";
										// 		echo "<td>".current($v)."</td>";
										// 		echo "<td>".$ranking."</td></tr>";							
										// 	}
										// }
										// echo "</table><hr>";
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
											
											function get_kepentingan_p(){
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
											
											function get_alt_name_p(){
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
													$i++;
												}
												return $alt_p;
											}
											
											function cmp_p($s_p, $b){
												if ($s_p == $b) {
													return 0;
												}
												return ($s_p < $b) ? -1 : 1;
											}

											function print_ar_p(array $x){	//just for print array
												echo "<pre>";
												print_r($x);
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
								
								