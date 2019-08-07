<section id="mu-reservation">
    <div class="container">
      <div class="row">
      <div class="col-md-12">               
                <?php  
                	include 'module/koneksi.php';                	
                	$query = "SELECT * FROM peserta WHERE s_juri_psikotest='belum'";
                	$hasil = mysqli_query($koneksi, $query);
                ?>
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="background-color: #bb9e5d;">
                  <thead>
                      <tr>
                          <th>No Peserta</th> 
                          <th>Nama Peserta</th>                                                    
                          <th>Nilai</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php                        
                        while($row = mysqli_fetch_array($hasil)){
                    ?>       
                          <form class="form-horizontal" style="color:blue" action="?module=simpan_nilai_semua" method="post">                                     
                            <tr>                                
                                <td><?php  echo '<input type="text" class="col-sm-5" name="alternatif[]" value="'.$row['nim'].'" readonly>';  ?></td>                                                          
                                <td><?php  echo '<input type="text" name="nama" value="'.$row['nama'].'" readonly>'; ?></td>
                                <td><?php  echo '<input type="number" min="50" max="90" name="nilai['.$row['nim'] .']" required>'; ?></td>                                                                
                            </tr>               
                    <?php } ?>       
                  </tbody>
              </table>                            
              <br><button type="submit" value="upload" class="btn btn-info">SIMPAN</button>
              </form>              
                </div>
      </div>
    </div>
  </section>