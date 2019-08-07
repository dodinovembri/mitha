<?php
?>
<script type="text/javascript" language="JavaScript">
 function konfirmasi()
 {
 tanya = confirm("Anda Yakin Akan Menghapus Data ?");
 if (tanya == true) return true;
 else return false;
 }</script>

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
              <a href="module/admin/cetak_lap_bujang.php" target="_blank"><button type="button" class="btn btn-primary">Cetak Laporan</button></a><br>
              <?php
                        include 'module/koneksi.php';
                        $sqlSelect = "SELECT nilai.*, alternatif.*, peserta.* FROM nilai JOIN alternatif ON nilai.no_peserta=alternatif.alternatif JOIN peserta ON alternatif.alternatif = peserta.nim WHERE nilai.no_peserta=alternatif.alternatif AND alternatif.jk ='L' AND alternatif.tolak='no' AND alternatif.ket='diterima' ORDER BY rank ASC";
                        $result = mysqli_query($koneksi, $sqlSelect); ?>
              <table id="example" class="table" cellspacing="0" width="100%" style="background-color: #bb9e5d;">
                <h3 style="color: white">Data Peserta Bujang Diterima</h3>
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
            <br>
            <div class="mu-reservation-content">
              <?php
                        include 'module/koneksi.php';
                        $sqlSelect = "SELECT nilai.*, alternatif.*, peserta.* FROM nilai JOIN alternatif ON nilai.no_peserta=alternatif.alternatif JOIN peserta ON alternatif.alternatif = peserta.nim WHERE nilai.no_peserta=alternatif.alternatif AND alternatif.jk='L' AND alternatif.tolak='yes' ORDER BY rank ASC";
                        $result = mysqli_query($koneksi, $sqlSelect); ?>
              <table id="example" class="table" cellspacing="0" width="100%" style="background-color: #bb9e5d;">
                <h3 style="color: white">Data Peserta Bujang Ditolak</h3>
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
        </div>
      </div>
    </div>
  </section>  
  <!-- End Reservation section -->
  <script>
$(document).ready(function() {
 $('#example').dataTable( {
        "language": {
            "url": "assets/css/datatables/Indonesian.json"
        }
    } );
} );
</script> 