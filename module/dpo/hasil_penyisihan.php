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
                        <?php
                        include 'module/koneksi.php';
                        $sqlSelect = "SELECT penyisihan.*, peserta.nama as nama FROM peserta JOIN penyisihan ON peserta.nim = penyisihan.alternatif WHERE penyisihan.tolak='no' AND penyisihan.jk='L' ORDER BY penyisihan.total DESC";
                        $result = mysqli_query($koneksi, $sqlSelect); ?>

                      <div class="panel-body table-responsive">
                      <a href="module/dpo/cetak_penyisihan.php" target="_blank"><button type="button" class="btn btn-primary">Cetak Laporan</button></a><br><br>
                       <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="background-color: #bb9e5d;">
                            <thead>
                                <tr>
                                    <th>No</th> 
                                    <th>No Peserta</th>
                                    <th>Nama Peserta</th>                                   
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
                                <td><?php  echo $row['nama']; ?></td>                                                          
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
                        </div>                    
                </div>
                <div class="mu-reservation-content">                       
                 <?php
                        include 'module/koneksi.php';
                        $sqlSelect = "SELECT * FROM alternatif  WHERE jk='P'";
                        $result = mysqli_query($koneksi, $sqlSelect); ?>

                      <div class="panel-body table-responsive">
                       <!-- <table id="example2" class="table table-striped table-bordered" cellspacing="0" width="100%" style="background-color: #bb9e5d;"> -->
                            <thead>
                                <tr>                                    
                                    <!-- <th>Alternatif</th>                                    -->
                                    <!-- <th>C1</th>   -->
                                    <!-- <th>C2</th>                                 -->
                                    <!-- <th>C3</th>                                      -->
                                    
                                </tr>
                            </thead>
                            <tbody>
                    <?php
                       
                        while ($row = mysqli_fetch_array($result)) {
                          
                    ?>                                            
                            <tr>
                                <!-- <td><?php  echo $row['alternatif']; ?></td> -->
                                <!-- <td><?php  echo $row['k1']; ?></td> -->
                                <!-- <td><?php  echo $row['k2']; ?></td> -->
                                <!-- <td><?php  echo $row['k3']; ?></td>                                 -->
                            </tr>
                    <?php
                        }
                    ?>
                            </tbody>
                        <!-- </table>                   -->
                </div>
            </div>
            <div class="mu-reservation-content">
                        <?php
                        include 'module/koneksi.php';
                        $sqlSelect = "SELECT penyisihan.*, peserta.nama as nama FROM peserta JOIN penyisihan ON peserta.nim = penyisihan.alternatif WHERE penyisihan.tolak='no' AND penyisihan.jk='P' ORDER BY penyisihan.total DESC";
                        $result = mysqli_query($koneksi, $sqlSelect); ?>

                      <div class="panel-body table-responsive">                      
                       <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="background-color: #bb9e5d;">
                            <thead>
                                <tr>
                                    <th>No</th> 
                                    <th>No Peserta</th>                                   
                                    <th>Nama Peserta</th>
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
                                <td><?php  echo $row['nama']; ?></td>                                                          
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
                        </div>                    
                </div>
                <div class="mu-reservation-content">                       
                 <?php
                        include 'module/koneksi.php';
                        $sqlSelect = "SELECT * FROM alternatif  WHERE jk='P'";
                        $result = mysqli_query($koneksi, $sqlSelect); ?>

                      <div class="panel-body table-responsive">
                       <!-- <table id="example2" class="table table-striped table-bordered" cellspacing="0" width="100%" style="background-color: #bb9e5d;"> -->
                            <thead>
                                <tr>                                    
                                    <!-- <th>Alternatif</th>                                    -->
                                    <!-- <th>C1</th>   -->
                                    <!-- <th>C2</th>                                 -->
                                    <!-- <th>C3</th>                                      -->
                                    
                                </tr>
                            </thead>
                            <tbody>
                    <?php
                       
                        while ($row = mysqli_fetch_array($result)) {
                          
                    ?>                                            
                            <tr>
                                <!-- <td><?php  echo $row['alternatif']; ?></td> -->
                                <!-- <td><?php  echo $row['k1']; ?></td> -->
                                <!-- <td><?php  echo $row['k2']; ?></td> -->
                                <!-- <td><?php  echo $row['k3']; ?></td>                                 -->
                            </tr>
                    <?php
                        }
                    ?>
                            </tbody>
                        <!-- </table>                   -->
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<script>
$(document).ready(function() {
 $('#example').dataTable( {
        "language": {
            "url": "assets/css/datatables/Indonesian.json"
        }
    } );
} );

$(document).ready(function() {
 $('#example2').dataTable( {
        "language": {
            "url": "assets/css/datatables/Indonesian.json"
        }
    } );
} );
</script> 
