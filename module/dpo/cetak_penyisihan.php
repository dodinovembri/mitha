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
<script>
function myFunction() {
  window.print();
}
</script>
<body onload="myFunction()">
    <h3>Peserta Laki-laki</h3>
	 <?php
                $koneksi = mysqli_connect("localhost", "root", "", "mitha");
                $sqlSelect = "SELECT * FROM penyisihan WHERE tolak='no' AND jk='L' ORDER BY total DESC";
                $result = mysqli_query($koneksi, $sqlSelect); ?>

               <table border="1" width="100%">
                    <thead>
                        <tr>
                            <th>No</th> 
                            <th>No Peserta</th>                                   
                            <th>Test Tertulis</th>  
                            <th>Psikotest</th>                                
                            <th>Walk In Interview</th>  
                            <th>Jenis Kelamin</th>
                            <th>Total Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
                <?php
                    $no = 0;
                    while ($row = mysqli_fetch_array($result)) {
                      $no++;
                ?>                                            
                        <tr>
                            <td><?php echo $no; ?></td>    
                            <td><?php  echo $row['alternatif']; ?></td>                                                          
                            <td><?php  echo $row['test_tertulis']; ?></td>
                            <td><?php  echo $row['psikotest']; ?></td>
                            <td><?php  echo $row['wii']; ?></td>
                            <td><?php  echo $row['jk']; ?></td>
                            <td><?php  echo $row['total']; ?></td>
                           
                        </tr>
                <?php
                    }
                ?>
                        </tbody>
                    </table>
                    <br><br>
                    <h3>Peserta Perempuan</h3>
	 <?php                
                $sqlSelect = "SELECT * FROM penyisihan WHERE tolak='no' AND jk='P' ORDER BY total DESC";
                $result = mysqli_query($koneksi, $sqlSelect); ?>

               <table border="1" width="100%">
                    <thead>
                        <tr>
                            <th>No</th> 
                            <th>No Peserta</th>                                   
                            <th>Test Tertulis</th>  
                            <th>Psikotest</th>                                
                            <th>Walk In Interview</th>  
                            <th>Jenis Kelamin</th>
                            <th>Total Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
                <?php
                    $no = 0;
                    while ($row = mysqli_fetch_array($result)) {
                      $no++;
                ?>                                            
                        <tr>
                            <td><?php echo $no; ?></td>    
                            <td><?php  echo $row['alternatif']; ?></td>                                                          
                            <td><?php  echo $row['test_tertulis']; ?></td>
                            <td><?php  echo $row['psikotest']; ?></td>
                            <td><?php  echo $row['wii']; ?></td>
                            <td><?php  echo $row['jk']; ?></td>
                            <td><?php  echo $row['total']; ?></td>
                           
                        </tr>
                <?php
                    }
                ?>
                        </tbody>
                    </table>
</body>