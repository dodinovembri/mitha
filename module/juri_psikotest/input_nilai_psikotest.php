<section id="mu-reservation">
    <div class="container">
      <div class="row">
      <div class="col-md-12">               
                <?php  
                	include 'module/koneksi.php';
                	$nim = $_GET['nim'];
                	$query = "SELECT * FROM peserta WHERE nim='$nim'";
                	$hasil = mysqli_query($koneksi, $query);

                	while ($row = mysqli_fetch_array($hasil)) {
                		$nama = $row['nama'];
                	}                  

                ?>
                <?php  
                  $id_role = $_SESSION['id_role'];
                  if ($id_role == 9) { ?>
                    <form class="form-horizontal" style="color:cornsilk" action="?module=simpan_nilai_psikotest" method="post"> <div class="box-body">
                        <input type="hidden" name="nim" value="<?php echo $nim; ?>">
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-2 control-label">No Peserta</label>

                                  <div class="col-sm-10">                                    
                                    <input type="text" name="nim" class="form-control" id="inputEmail3" placeholder="NIM" value="<?php echo $nim; ?>" readonly>                      
                                  </div>
                                </div>                  
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>

                                  <div class="col-sm-10">
                                    <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Nama Lengkap" value="<?php echo $nama; ?>" readonly><br>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-2 control-label"></label>
                                  <div class="col-sm-10">
                                    <span style="color: red">Nilai Untuk Babak Penyisihan</span>                    
                                  </div>
                                </div>
                                 <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-2 control-label">Nilai</label>

                                  <div class="col-sm-10">
                                    <input type="number" min="50" max="90" name="psikotest" class="form-control" placeholder="Nilai Psikotest 50-90" required>                                  
                                  </div>
                                </div> 
                                                                                                   
			                  <div class="form-group">
			                    <label for="inputEmail3" class="col-sm-2 control-label"></label>
			                    <div class="col-sm-10">
			                      <br><button type="submit" value="upload" class="btn btn-info">SIMPAN</button>
			                    </div>
			                  </div>
                </div>
                <!-- /.box-body -->
              </form>                                        
                <?php  }
                ?>
                </div>
              </div>           
            </div>
          </div>         
        </div>
      </div>
    </div>
  </section>