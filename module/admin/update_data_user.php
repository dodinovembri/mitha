                      
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
            <?php 
              include 'module/koneksi.php';
              $username = $_GET['username'];
              $query = "SELECT * FROM user WHERE username='$username'";
              $hasil = mysqli_query($koneksi, $query);

              while ($row = mysqli_fetch_array($hasil)) {                 
                $nama = $row['nama']; 
                $role = $row['id_role'];
              }          
           ?>
            <div class="mu-reservation-content">
                  <form class="form-sigin" method="POST" action="?module=simpan_update_user">
                  <fieldset style="background-color: #bb9e5d; padding: 25px;">
                    <div class="form-group"><label class="col-sm-2 control-label">NIM / username</label>
                        <div class="col-sm-10"><input type="text" name="username" class="form-control" placeholder="Nomor Identitas" value="<?php echo $username; ?>" readonly><br>  
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Nama</label>
                        <div class="col-sm-10"><input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" value="<?php echo $nama; ?>" required><br>
                        </div>
                    </div>
                        <div class="form-group"><label class="col-sm-2 control-label">Role</label>
                          <div class="col-sm-10">
                            <select name="id_role" class="form-control" required>
                               <option value="<?php echo $role; ?>"><?php echo $role; ?></option>
                              <?php 
                              $query = mysqli_query($koneksi, "SELECT * FROM role");
                              while ($row = mysqli_fetch_array($query)) { ?>
                                    <option value="<?php echo $row['id_role'] ?>"><?php echo $row['role']; ?></option>  
                                  <?php
                                }
                              ?>
                            </select><br>                            
                          </div> 
                          </div>   
                    <div class="form-group">
                      <div class="col-sm-4 col-sm-offset-2">                          
                          <br><button class="btn btn-primary" type="submit">SIMPAN</button>
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