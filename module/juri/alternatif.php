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
                        $sqlSelect = "SELECT * FROM alternatif WHERE jk='L' AND tolak='no'";
                        $result = mysqli_query($koneksi, $sqlSelect); 
                        echo "<center><b style='color:#ffffff;'>Peserta Laki-Laki</b></br></center>";
                        ?>                    
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="background-color: #bb9e5d;">
                            <thead>
                                <tr>                                    
                                    <th>Alternatif</th>                                   
                                    <th>C1</th>  
                                    <th>C2</th>                                
                                    <th>C3</th>                                     
                                    
                                </tr>
                            </thead>
                            <tbody>
                          <?php
                             
                              while ($row = mysqli_fetch_array($result)) {
                                
                          ?>                                            
                                  <tr>
                                      <td><?php  echo $row['alternatif']; ?></td>
                                      <td><?php  echo $row['k1']; ?></td>
                                      <td><?php  echo $row['k2']; ?></td>
                                      <td><?php  echo $row['k3']; ?></td>                                
                                  </tr>
                          <?php
                              }
                          ?>
                            </tbody>
                        </table>
                        
                        <hr>
            </div>
          </div>
        </div>
         <div class="col-md-12">
          <div class="mu-reservation-area">
            <div class="mu-reservation-content">              
                <?php
                        include 'module/koneksi.php';
                        $sqlSelect = "SELECT * FROM alternatif  WHERE jk='P' AND tolak='no'";
                        $result = mysqli_query($koneksi, $sqlSelect); 

                        echo "<center><b style='color:#ffffff;'>Peserta Perempuan</b></br></center>";
                        ?>

                       <table id="example2" class="table table-striped table-bordered" cellspacing="0" width="100%" style="background-color: #bb9e5d;">
                            <thead>
                                <tr>                                    
                                    <th>Alternatif</th>                                   
                                    <th>C1</th>  
                                    <th>C2</th>                                
                                    <th>C3</th>                                     
                                    
                                </tr>
                            </thead>
                            <tbody>
                        <?php
                           
                            while ($row = mysqli_fetch_array($result)) {
                              
                        ?>                                            
                                <tr>
                                    <td><?php  echo $row['alternatif']; ?></td>
                                    <td><?php  echo $row['k1']; ?></td>
                                    <td><?php  echo $row['k2']; ?></td>
                                    <td><?php  echo $row['k3']; ?></td>                                
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
