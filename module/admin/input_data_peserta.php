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
                  <form class="form-sigin" method="POST" action="?module=simpan_data_peserta">
                  <fieldset style="background-color: #bb9e5d; padding: 25px;">
                    <div class="form-group"><label class="col-sm-2 control-label">No Peserta</label>
                        <div class="col-sm-10"><input type="number" name="nim" class="form-control" placeholder="Nomor Peserta" required><br>  
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Nama</label>
                        <div class="col-sm-10"><input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required><br>
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Alamat</label>
                        <div class="col-sm-10"><input type="text" name="alamat" class="form-control" placeholder="Alamat" required><br>
                        </div>
                    </div>       
                    <!--  <div class="form-group"><label class="col-sm-2 control-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                          <input type="radio" name="jk" value="L" required> Laki-Laki<br>
                          <input type="radio" name="jk" value="P" required> Perempuan<br>
                          <hr>
                        </div>
                    </div>  -->                               
                    <div class="form-group"><label class="col-sm-2 control-label">IPK</label>
                        <div class="col-sm-10"><input type="text" name="ipk" class="form-control" placeholder="Indeks Prestasi Kumulatif" required><br>
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Tinggi Badan</label>
                        <div class="col-sm-10"><input type="text" name="tb" class="form-control" placeholder="Tinggi Badan" required><br>
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Universitas</label>
                        <div class="col-sm-10"><input type="text" name="universitas" class="form-control" placeholder="Asal Universitas" required><br>
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Fakultas</label>
                        <div class="col-sm-10"><input type="text" name="fakultas" class="form-control" placeholder="Fakultas" required><br>
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Jurusan</label>
                        <div class="col-sm-10"><input type="text" name="jurusan" class="form-control" placeholder="Jurusan" required><br>
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