           <?php 
           		include 'module/koneksi.php';
           		$nim = $_GET['nim'];
           		$query = "SELECT * FROM peserta WHERE nim='$nim'";
           		$hasil = mysqli_query($koneksi, $query);

           		while ($row = mysqli_fetch_array($hasil)) {
           			$nim_db = $row['nim'];
           			$nama = $row['nama']; 
           			$alamat = $row['alamat']; 
           			$universitas = $row['universitas']; 
           			$fakultas = $row['fakultas'];   
           			$jurusan = $row['jurusan'];            			          	
           		}
           ?>

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
                  <form class="form-sigin" method="POST" action="?module=simpan_update_peserta">
                  <fieldset style="background-color: #bb9e5d; padding: 25px;">
                    <div class="form-group"><label class="col-sm-2 control-label">Nomor Peserta</label>
                        <div class="col-sm-10"><input type="text" name="nim" class="form-control" placeholder="Nomor Induk Mahasiswa" value="<?php echo $nim; ?>" readonly><br>  
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Nama</label>
                        <div class="col-sm-10"><input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" value="<?php echo $nama; ?>" required><br>
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Alamat</label>
                        <div class="col-sm-10"><input type="text" name="alamat" class="form-control" placeholder="Alamat" value="<?php echo $alamat; ?>" required><br>
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Universitas</label>
                        <div class="col-sm-10"><input type="text" name="universitas" class="form-control" placeholder="Asal Universitas" value="<?php echo $universitas; ?>" required><br>
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Fakultas</label>
                        <div class="col-sm-10"><input type="text" name="fakultas" class="form-control" placeholder="Fakultas" value="<?php echo $fakultas; ?>" required><br>
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Jurusan</label>
                        <div class="col-sm-10"><input type="text" name="jurusan" class="form-control" placeholder="Jurusan" value="<?php echo $jurusan; ?>" required><br>
                        </div>
                    </div>                 
                    <div class="form-group">
                      <div class="col-sm-4 col-sm-offset-2">                          
                          <br><button class="btn btn-success btn-md" type="submit" style="width: 100%;">SIMPAN</button>
                      </div>
                    </div>
                  </fieldset>
                  </form> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>