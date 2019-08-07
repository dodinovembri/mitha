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
                  if ($id_role == 2) { ?>
                    <form class="form-horizontal" style="color:cornsilk" action="?module=simpan_nilai_semifinal_juri_bing_proker" method="post"> <div class="box-body">
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
                                    <span style="color: red">Nilai Untuk Kriteria Presentasi Program Kerja</span>                    
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-2 control-label">Leadership</label>

                                  <div class="col-sm-10"> 
                                    <select name="n_leadership_proker" class="form-control" required>
                                      <option></option>
                                      <option value="85">Sangat Aktif Memimpin Presentasi</option>
                                      <option value="80">Aktif Memimpin Presentasi</option>
                                      <option value="75">Cukup Aktif Memimpin Presentasi</option>
                                      <option value="70">Kurang Aktif Memimpin Presentasi</option>
                                      <option value="65">Sangat Kurang Memimpin Presentasi</option>
                                    </select>                   
                                  </div>
                                </div> 
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-2 control-label">Public Speaking</label>

                                  <div class="col-sm-10">  
                                    <select name="n_public_speaking_proker" class="form-control" required>
                                      <option></option>
                                      <option value="85">Selalu Menanggapi Pertanyaan</option>
                                      <option value="80">Sering Menanggapi Pertanyaan</option>
                                      <option value="75">Cukup Sering Menanggapi Pertanyaan</option>
                                      <option value="70">Kurang Menanggapi Pertanyaan</option>
                                      <option value="65">Tidak Pernah Menanggapi Pertanyaan</option>
                                    </select>                   
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-2 control-label">Penampilan</label>

                                  <div class="col-sm-10">
                                     <select name="n_penampilan" class="form-control" required>
                                      <option></option>
                                      <option value="85">Sangat Menarik</option>
                                      <option value="80">Menarik</option>
                                      <option value="75">Kurang Menarik</option>
                                      <option value="70">Tidak Menarik</option>
                                      <option value="65">Sangat Tidak Menarik</option>
                                    </select>                     
                                  </div>
                                </div> 
                                 <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-2 control-label">Isi Materi</label>

                                  <div class="col-sm-10">
                                    <select name="n_isi_materi" class="form-control" required>
                                      <option></option>
                                      <option value="85">Sangat Kreatif</option>
                                      <option value="80">Kreatif</option>
                                      <option value="75">Kurang Kreatif</option>
                                      <option value="70">Tidak Kreatif</option>
                                      <option value="65">Sangat Tidak Kreatif</option>
                                    </select>
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
                <?php }
                  elseif ($id_role == 4) { ?>
                    <form class="form-horizontal" style="color:cornsilk" action="?module=simpan_nilai_semifinal_juri_psikologi_proker" method="post"> <div class="box-body">
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
                      <span style="color: red">Nilai Untuk Kriteria Presentasi Program Kerja</span>                    
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Leadership</label>

                    <div class="col-sm-10"> 
                      <select name="n_leadership_proker" class="form-control" required>
                        <option></option>
                        <option value="85">Sangat Aktif Memimpin Presentasi</option>
                        <option value="80">Aktif Memimpin Presentasi</option>
                        <option value="75">Cukup Aktif Memimpin Presentasi</option>
                        <option value="70">Kurang Aktif Memimpin Presentasi</option>
                        <option value="65">Sangat Kurang Memimpin Presentasi</option>
                      </select>                   
                    </div>
                  </div> 
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Public Speaking</label>

                    <div class="col-sm-10">  
                      <select name="n_public_speaking_proker" class="form-control" required>
                        <option></option>
                        <option value="85">Selalu Menanggapi Pertanyaan</option>
                        <option value="80">Sering Menanggapi Pertanyaan</option>
                        <option value="75">Cukup Sering Menanggapi Pertanyaan</option>
                        <option value="70">Kurang Menanggapi Pertanyaan</option>
                        <option value="65">Tidak Pernah Menanggapi Pertanyaan</option>
                      </select>                   
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Penampilan</label>

                    <div class="col-sm-10">
                       <select name="n_penampilan" class="form-control" required>
                        <option></option>
                        <option value="85">Sangat Menarik</option>
                        <option value="80">Menarik</option>
                        <option value="75">Kurang Menarik</option>
                        <option value="70">Tidak Menarik</option>
                        <option value="65">Sangat Tidak Menarik</option>
                      </select>                     
                    </div>
                  </div> 
                   <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Isi Materi</label>

                    <div class="col-sm-10">
                      <select name="n_isi_materi" class="form-control" required>
                        <option></option>
                        <option value="85">Sangat Kreatif</option>
                        <option value="80">Kreatif</option>
                        <option value="75">Kurang Kreatif</option>
                        <option value="70">Tidak Kreatif</option>
                        <option value="65">Sangat Tidak Kreatif</option>
                      </select>
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
                  elseif ($id_role == 5) { ?>
                    <form class="form-horizontal" style="color:cornsilk" action="?module=simpan_nilai_semifinal_juri_akademik_proker" method="post"> <div class="box-body">
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
                      <span style="color: red">Nilai Untuk Kriteria Presentasi Program Kerja</span>                    
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Leadership</label>

                    <div class="col-sm-10"> 
                      <select name="n_leadership_proker" class="form-control" required>
                        <option></option>
                        <option value="85">Sangat Aktif Memimpin Presentasi</option>
                        <option value="80">Aktif Memimpin Presentasi</option>
                        <option value="75">Cukup Aktif Memimpin Presentasi</option>
                        <option value="70">Kurang Aktif Memimpin Presentasi</option>
                        <option value="65">Sangat Kurang Memimpin Presentasi</option>
                      </select>                   
                    </div>
                  </div> 
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Public Speaking</label>

                    <div class="col-sm-10">  
                      <select name="n_public_speaking_proker" class="form-control" required>
                        <option></option>
                        <option value="85">Selalu Menanggapi Pertanyaan</option>
                        <option value="80">Sering Menanggapi Pertanyaan</option>
                        <option value="75">Cukup Sering Menanggapi Pertanyaan</option>
                        <option value="70">Kurang Menanggapi Pertanyaan</option>
                        <option value="65">Tidak Pernah Menanggapi Pertanyaan</option>
                      </select>                   
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Penampilan</label>

                    <div class="col-sm-10">
                       <select name="n_penampilan" class="form-control" required>
                        <option></option>
                        <option value="85">Sangat Menarik</option>
                        <option value="80">Menarik</option>
                        <option value="75">Kurang Menarik</option>
                        <option value="70">Tidak Menarik</option>
                        <option value="65">Sangat Tidak Menarik</option>
                      </select>                     
                    </div>
                  </div> 
                   <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Isi Materi</label>

                    <div class="col-sm-10">
                      <select name="n_isi_materi" class="form-control" required>
                        <option></option>
                        <option value="85">Sangat Kreatif</option>
                        <option value="80">Kreatif</option>
                        <option value="75">Kurang Kreatif</option>
                        <option value="70">Tidak Kreatif</option>
                        <option value="65">Sangat Tidak Kreatif</option>
                      </select>
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
                  elseif ($id_role == 6) { ?>
                    <form class="form-horizontal" style="color:cornsilk" action="?module=simpan_nilai_semifinal_juri_kebudayaan_proker" method="post"> <div class="box-body">
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
                      <span style="color: red">Nilai Untuk Kriteria Presentasi Program Kerja</span>                    
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Leadership</label>

                    <div class="col-sm-10"> 
                      <select name="n_leadership_proker" class="form-control" required>
                        <option></option>
                        <option value="85">Sangat Aktif Memimpin Presentasi</option>
                        <option value="80">Aktif Memimpin Presentasi</option>
                        <option value="75">Cukup Aktif Memimpin Presentasi</option>
                        <option value="70">Kurang Aktif Memimpin Presentasi</option>
                        <option value="65">Sangat Kurang Memimpin Presentasi</option>
                      </select>                   
                    </div>
                  </div> 
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Public Speaking</label>

                    <div class="col-sm-10">  
                      <select name="n_public_speaking_proker" class="form-control" required>
                        <option></option>
                        <option value="85">Selalu Menanggapi Pertanyaan</option>
                        <option value="80">Sering Menanggapi Pertanyaan</option>
                        <option value="75">Cukup Sering Menanggapi Pertanyaan</option>
                        <option value="70">Kurang Menanggapi Pertanyaan</option>
                        <option value="65">Tidak Pernah Menanggapi Pertanyaan</option>
                      </select>                   
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Penampilan</label>

                    <div class="col-sm-10">
                       <select name="n_penampilan" class="form-control" required>
                        <option></option>
                        <option value="85">Sangat Menarik</option>
                        <option value="80">Menarik</option>
                        <option value="75">Kurang Menarik</option>
                        <option value="70">Tidak Menarik</option>
                        <option value="65">Sangat Tidak Menarik</option>
                      </select>                     
                    </div>
                  </div> 
                   <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Isi Materi</label>

                    <div class="col-sm-10">
                      <select name="n_isi_materi" class="form-control" required>
                        <option></option>
                        <option value="85">Sangat Kreatif</option>
                        <option value="80">Kreatif</option>
                        <option value="75">Kurang Kreatif</option>
                        <option value="70">Tidak Kreatif</option>
                        <option value="65">Sangat Tidak Kreatif</option>
                      </select>
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
                  elseif ($id_role == 7) { ?>
                    <form class="form-horizontal" style="color:cornsilk" action="?module=simpan_nilai_semifinal_juri_kepemudaan_proker" method="post"> <div class="box-body">
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
                      <span style="color: red">Nilai Untuk Kriteria Presentasi Program Kerja</span>                    
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Leadership</label>

                    <div class="col-sm-10"> 
                      <select name="n_leadership_proker" class="form-control" required>
                        <option></option>
                        <option value="85">Sangat Aktif Memimpin Presentasi</option>
                        <option value="80">Aktif Memimpin Presentasi</option>
                        <option value="75">Cukup Aktif Memimpin Presentasi</option>
                        <option value="70">Kurang Aktif Memimpin Presentasi</option>
                        <option value="65">Sangat Kurang Memimpin Presentasi</option>
                      </select>                   
                    </div>
                  </div> 
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Public Speaking</label>

                    <div class="col-sm-10">  
                      <select name="n_public_speaking_proker" class="form-control" required>
                        <option></option>
                        <option value="85">Selalu Menanggapi Pertanyaan</option>
                        <option value="80">Sering Menanggapi Pertanyaan</option>
                        <option value="75">Cukup Sering Menanggapi Pertanyaan</option>
                        <option value="70">Kurang Menanggapi Pertanyaan</option>
                        <option value="65">Tidak Pernah Menanggapi Pertanyaan</option>
                      </select>                   
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Penampilan</label>

                    <div class="col-sm-10">
                       <select name="n_penampilan" class="form-control" required>
                        <option></option>
                        <option value="85">Sangat Menarik</option>
                        <option value="80">Menarik</option>
                        <option value="75">Kurang Menarik</option>
                        <option value="70">Tidak Menarik</option>
                        <option value="65">Sangat Tidak Menarik</option>
                      </select>                     
                    </div>
                  </div> 
                   <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Isi Materi</label>

                    <div class="col-sm-10">
                      <select name="n_isi_materi" class="form-control" required>
                        <option></option>
                        <option value="85">Sangat Kreatif</option>
                        <option value="80">Kreatif</option>
                        <option value="75">Kurang Kreatif</option>
                        <option value="70">Tidak Kreatif</option>
                        <option value="65">Sangat Tidak Kreatif</option>
                      </select>
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
  </section>