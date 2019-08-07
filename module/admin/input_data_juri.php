<script type="text/javascript">
    function Validate() {
        var password = document.getElementById("txtPassword").value;
        var confirmPassword = document.getElementById("txtConfirmPassword").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script>



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
                  <form class="form-sigin" method="POST" action="?module=simpan_data_juri">
                  <fieldset style="background-color: #bb9e5d; padding: 25px;">
                      <div class="form-group"><label class="col-sm-2 control-label">NIM / NIK</label>
                          <div class="col-sm-10"><input type="text" name="username" class="form-control" placeholder="Isikan dengan Nomor Identitas" required><br>  
                          </div>
                      </div>
                      <div class="form-group"><label class="col-sm-2 control-label">Nama</label>
                          <div class="col-sm-10"><input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required><br>
                          </div>
                      </div>                   
                      <div class="form-group"><label class="col-sm-2 control-label">Role</label>
                          <div class="col-sm-10">
                            <select name="id_role" class="form-control" required>
                              <option>-- Pilih Role ---</option>
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
                        <label for="inputEmail3" class="col-sm-2 control-label">New Password</label>

                        <div class="col-sm-10">
                          <input type="password" name="password" class="form-control" id="txtPassword" placeholder="Password" required><br>                      
                        </div>
                      </div>  
                       <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Confirm Password</label>

                        <div class="col-sm-10">
                          <input type="password" name="password" class="form-control" id="txtConfirmPassword" placeholder="Konfirmasi Password" required>                      
                        </div>
                      </div>                        
                      <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-2">                          
                            <br><button class="btn btn-primary" type="submit" onclick="return Validate()">SIMPAN</button>
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