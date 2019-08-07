<?php  
	$koneksi = mysqli_connect("localhost", "root", "", "mitha");
	ini_set("display_errors", "Off");
?>
<script>
function myFunction() {
  window.print();
}
</script>
<body onload="myFunction()">
	<div style="page-break-after:always;" class="col-md-6">      
<div class="panel-body">

<!-- mulai kepala surat -->

<table border="0" style="width: 100%; text-align: center;">
	<tr style="line-height: 1;">
		<td style="width: 5%"><img src="../../assets/img/logosumsel.png" style="width: 1.70cm; height: 2.01cm;"></td>
		<td style="width: 90%"><span style="color: #6b81d2; font-family: arial; font-size: 13;"><strong>PANITIA PELAKSANA</strong></span><br><span style="color: red; font-family: arial; font-size: 13;"><strong>Pemilihan Bujang Gadis Kampus<br>Duta Pendidikan Dan Budaya Sumatera Selatan 2019</strong></span><br><span style="color: #6b81d2; font-family: arial; font-size: 13;"><strong>IKATAN BUJANG GADIS KAMPUS SUMATERA SELATAN</strong></span><br><span style="color: #000000; font-family: arial; font-size: 9;">Sekretariat: Jalan Dwikora II No. 2810 a, Kecamatan Ilir Barat 1, Palembang<br></span><span style="color: #000000; font-family: arial; font-size: 9;">Contact Person: Angga (082282688157) Maya (081369201079) Rahmadina (089635173009)</span>
		</td>
		<td style="width: 5%"><img src="../../assets/img/logobgk.png" style="width: width: 2.15cm; height: 2.04cm;"></td>
	</tr>
</table>
<hr style="border: 0; height: 2px; background-color: red;">
<hr style="border: 0; height: 1px; background-color: red; margin-top: -7px;">
<!-- akhir kepala surat -->
 <?php
                        include 'module/koneksi.php';
                        $sqlSelect = "SELECT nilai.*, alternatif.*, peserta.* FROM nilai JOIN alternatif ON nilai.no_peserta=alternatif.alternatif JOIN peserta ON alternatif.alternatif = peserta.nim WHERE nilai.no_peserta=alternatif.alternatif AND alternatif.jk ='P' AND alternatif.tolak='no' AND alternatif.ket='diterima' ORDER BY rank ASC";
                        $result = mysqli_query($koneksi, $sqlSelect); ?>

                        <table border='1' width='100%' style='margin-top: 10px;'>
                <h3 style="color: black">Data Peserta Gadis Diterima</h3>
                            <thead>
                                <tr>                                    
                                    <th>No Peserta</th>                                   
                                    <th>Nama</th>                                                                
                                    <th>Asal Kampus</th>  
                                    <th>Nilai Akhir</th>                                                                  
                                </tr>
                            </thead>
                            <tbody>
                          <?php                              
                              while ($row = mysqli_fetch_array($result)) {                               
                          ?>                                            
                                  <tr>                                    
                                      <td><?php  echo $row['no_peserta']; ?></td>                                                          
                                      <td><?php  echo $row['nama']; ?></td>                                      
                                      <td><?php  echo $row['universitas']; ?></td>
                                      <td><?php  echo $row['nilai']; ?></td>                                                                            
                                  </tr>
                          <?php
                              }
                          ?>
                            </tbody>
                        </table>  
</div>	
</div>
<div style="page-break-after:always;" class="col-md-6">
<div class="panel-body">
<!-- mulai kepala surat -->

<table border="0" style="width: 100%; text-align: center;">
	<tr style="line-height: 1;">
		<td style="width: 5%"><img src="../../assets/img/logosumsel.png" style="width: 1.70cm; height: 2.01cm;"></td>
		<td style="width: 90%"><span style="color: #6b81d2; font-family: arial; font-size: 13;"><strong>PANITIA PELAKSANA</strong></span><br><span style="color: red; font-family: arial; font-size: 13;"><strong>Pemilihan Bujang Gadis Kampus<br>Duta Pendidikan Dan Budaya Sumatera Selatan 2019</strong></span><br><span style="color: #6b81d2; font-family: arial; font-size: 13;"><strong>IKATAN BUJANG GADIS KAMPUS SUMATERA SELATAN</strong></span><br><span style="color: #000000; font-family: arial; font-size: 9;">Sekretariat: Jalan Dwikora II No. 2810 a, Kecamatan Ilir Barat 1, Palembang<br></span><span style="color: #000000; font-family: arial; font-size: 9;">Contact Person: Angga (082282688157) Maya (081369201079) Rahmadina (089635173009)</span>
		</td>
		<td style="width: 5%"><img src="../../assets/img/logobgk.png" style="width: width: 2.15cm; height: 2.04cm;"></td>
	</tr>
</table>
<hr style="border: 0; height: 2px; background-color: red;">
<hr style="border: 0; height: 1px; background-color: red; margin-top: -7px;">
<!-- akhir kepala surat -->				
 <?php
                        include 'module/koneksi.php';
                        $sqlSelect = "SELECT nilai.*, alternatif.*, peserta.* FROM nilai JOIN alternatif ON nilai.no_peserta=alternatif.alternatif JOIN peserta ON alternatif.alternatif = peserta.nim WHERE nilai.no_peserta=alternatif.alternatif AND alternatif.jk='P' AND alternatif.tolak='yes' ORDER BY rank ASC";
                        $result = mysqli_query($koneksi, $sqlSelect); ?>
              <table border='1' width='100%' style='margin-top: 10px;'>
                <h3 style="color: black">Data Peserta Gadis Ditolak</h3>
                            <thead>
                                <tr>                                    
                                    <th>No Peserta</th>                                   
                                    <th>Nama</th>                                                                
                                    <th>Asal Kampus</th>  
                                    <th>Nilai Akhir</th>                                                                  
                                </tr>
                            </thead>
                            <tbody>
                          <?php                              
                              while ($row = mysqli_fetch_array($result)) {                               
                          ?>                                            
                                  <tr>                                    
                                      <td><?php  echo $row['no_peserta']; ?></td>                                                          
                                      <td><?php  echo $row['nama']; ?></td>                                      
                                      <td><?php  echo $row['universitas']; ?></td>
                                      <td><?php  echo $row['nilai']; ?></td>                                                                            
                                  </tr>
                          <?php
                              }
                          ?>
                            </tbody>
                        </table>      
</div>
</div>             
</body>