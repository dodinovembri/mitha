<script type="text/javascript" language="JavaScript">
 function konfirmasi()
 {
 tanya = confirm("Anda Yakin Akan Menghapus Data ?");
 if (tanya == true) return true;
 else return false;
 }</script>

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
                        $sqlSelect = "SELECT * FROM penyisihan WHERE jk='L'";
                        $result = mysqli_query($koneksi, $sqlSelect); ?>

                      <div class="panel-body table-responsive">
                       <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="background-color: #bb9e5d;">
                            <thead>
                                <tr>                                    
                                    <th>No Peserta</th>                                   
                                    <th>Test Tertulis</th>  
                                    <th>Psikotest</th>                                
                                    <th>Walk In Intervview</th>                                                                                                       
                                </tr>
                            </thead>
                            <tbody>
                    <?php
                       
                        while ($row = mysqli_fetch_array($result)) {
                          
                    ?>                                            
                            <tr>
                                <td><?php  echo $row['alternatif']; ?></td>
                                <td><?php  if ($row['status_juri_tertulis'] == 'belum') {
                                    echo '<span class="glyphicon glyphicon-remove"></span>';
                                }else{
                                    echo '<span class="glyphicon glyphicon-ok"></span>';
                                }?></td>
                                <td><?php   if ($row['status_juri_psikotest'] == 'belum') {
                                    echo '<span class="glyphicon glyphicon-remove"></span>';
                                }else{
                                    echo '<span class="glyphicon glyphicon-ok"></span>';
                                }?></td>
                                <td><?php  if ($row['status_juri_wii'] == 'belum') {
                                    echo '<span class="glyphicon glyphicon-remove"></span>';
                                }else{
                                    echo '<span class="glyphicon glyphicon-ok"></span>';
                                }?></td>                                                                                          
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
                        $sqlSelect = "SELECT * FROM penyisihan  WHERE jk='P' AND tolak='no'";
                        $result = mysqli_query($koneksi, $sqlSelect); ?>

                      <div class="panel-body table-responsive">
                       <table id="example2" class="table table-striped table-bordered" cellspacing="0" width="100%" style="background-color: #bb9e5d;">
                            <thead>
                                <tr>                                    
                                    <th>No Peserta</th>                                   
                                    <th>Test Tertulis</th>  
                                    <th>Psikotest</th>                                
                                    <th>Walk In Interview</th>                                     
                                </tr>
                            </thead>
                            <tbody>
                    <?php
                       
                        while ($row = mysqli_fetch_array($result)) {
                          
                    ?>                                            
                            <tr>
                                <td><?php  echo $row['alternatif']; ?></td>
                                <td><?php  if ($row['status_juri_tertulis'] == 'belum') {
                                    echo '<span class="glyphicon glyphicon-remove"></span>';
                                }else{
                                    echo '<span class="glyphicon glyphicon-ok"></span>';
                                }?></td>
                                <td><?php  if ($row['status_juri_psikotest'] == 'belum') {
                                    echo '<span class="glyphicon glyphicon-remove"></span>';
                                }else{
                                    echo '<span class="glyphicon glyphicon-ok"></span>';
                                }?></td>
                                <td><?php  if ($row['status_juri_wii'] == 'belum') {
                                    echo '<span class="glyphicon glyphicon-remove"></span>';
                                }else{
                                    echo '<span class="glyphicon glyphicon-ok"></span>';
                                }?></td>                                                                                        
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
