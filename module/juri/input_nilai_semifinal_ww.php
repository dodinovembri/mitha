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
                    <form class="form-horizontal" style="color:cornsilk" action="?module=simpan_nilai_semifinal_juri_bing_ww" method="post"> <div class="box-body">
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
                                    <span style="color: red">Nilai Untuk Kriteria Tes Wawancara</span>                    
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-2 control-label"></label>

                                  <div class="col-sm-12">
                                     <div class="form-group">
                                     <label for="inputEmail3" class="col-sm-2 control-label">Fluency</label>

                                     <div class="col-sm-10">
                                    <select name="n_fluency" class="form-control" required>
                                      <option></option>
                                      <option value="100">Sangat Lancar</option>
                                      <option value="90">Lancar</option>
                                      <option value="80">Cukup Lancar</option>
                                      <option value="70">Tidak Lancar</option>
                                      <option value="60">Sangat Tidak Lancar</option>
                                    </select> 
                                     </div>
                                  </div>
                                  <div class="form-group">
                                     <label for="inputEmail3" class="col-sm-2 control-label">Information</label>

                                     <div class="col-sm-10">
                                    <select name="n_information" class="form-control" required>
                                      <option></option>
                                      <option value="100">Sangat Jelas</option>
                                      <option value="90">Jelas</option>
                                      <option value="80">Cukup Jelas</option>
                                      <option value="70">Tidak Jelas</option>
                                      <option value="60">Sangat Tidak Jelas</option>
                                    </select>  
                                     </div>
                                  </div>
                                  <div class="form-group">
                                     <label for="inputEmail3" class="col-sm-2 control-label">Pronouncation</label>

                                     <div class="col-sm-10">
                                       <select name="n_pronouncation" class="form-control" required>
                                      <option></option>
                                      <option value="100">Sangat Baik</option>
                                      <option value="90">Baik</option>
                                      <option value="80">Cukup Baik</option>
                                      <option value="70">Tidak Baik</option>
                                      <option value="60">Sangat Tidak Baik</option>
                                    </select>                      
                                     </div>
                                  </div> 
                                  <div class="form-group">
                                     <label for="inputEmail3" class="col-sm-2 control-label">Presentation</label>

                                     <div class="col-sm-10">
                                    <select name="n_presentation" class="form-control" required>
                                      <option></option>
                                      <option value="100">Sangat Menarik</option>
                                      <option value="90">Menarik</option>
                                      <option value="80">Cukup Menarik</option>
                                      <option value="70">Tidak Menarik</option>
                                      <option value="60">Sangat Tidak Menarik</option>
                                    </select>                 
                                     </div>
                                  </div>
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
                    <form class="form-horizontal" style="color:cornsilk" action="?module=simpan_nilai_semifinal_juri_psikologi_ww" method="post"> <div class="box-body">
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
                      <span style="color: red">Nilai Untuk Kriteria Tes Wawanncara Psikologi</span>                    
                    </div>
                  </div>                 
                  <div class="form-group">                    

                    <div class="col-sm-12">
                       <div class="form-group">
                       <label for="inputEmail3" class="col-sm-2 control-label">IQ</label>

                       <div class="col-sm-10">  
                      <select name="n_iq" class="form-control" required>
                        <option></option>
                        <option value="100">Sangat Cerdas</option>
                        <option value="90">Cerdas</option>
                        <option value="80">Cukup Cerdas</option>
                        <option value="70">Tidak Cerdas</option>
                        <option value="60">Sangat Tidak Cerdas</option>
                      </select>                  
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="inputEmail3" class="col-sm-2 control-label">Klasifikasi</label>

                       <div class="col-sm-10">
                      <select name="n_klasifikasi" class="form-control" required>
                        <option></option>
                        <option value="100">Sangat Baik</option>
                        <option value="90">Baik</option>
                        <option value="80">Cukup Baik</option>
                        <option value="70">Tidak Baik</option>
                        <option value="60">Sangat Tidak Baik</option>
                      </select>                        
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="inputEmail3" class="col-sm-2 control-label">Kepribadian</label>

                       <div class="col-sm-10">
                      <select name="n_kepribadian" class="form-control" required>
                        <option></option>
                        <option value="100">Sangat Menarik</option>
                        <option value="90">Menarik</option>
                        <option value="80">Cukup Menarik</option>
                        <option value="70">Tidak Menarik</option>
                        <option value="60">Sangat Tidak Menarik</option>
                      </select>                      
                       </div>
                    </div>                      
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
                    <form class="form-horizontal" style="color:cornsilk" action="?module=simpan_nilai_semifinal_juri_akademik_ww" method="post"> <div class="box-body">
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
                      <span style="color: red">Nilai Untuk Kriteria Tes Wawancara Akademik</span>                    
                    </div>
                  </div>        
                  <div class="form-group">
                    

                    <div class="col-sm-12">
                       <div class="form-group">
                       <label for="inputEmail3" class="col-sm-2 control-label">Brain</label>

                       <div class="col-sm-10">     
                      <select name="n_brain" class="form-control" required>
                        <option></option>
                        <option value="100">Sangat Cerdas</option>
                        <option value="90">Cerdas</option>
                        <option value="80">Cukup Cerdas</option>
                        <option value="70">Tidak Cerdas</option>
                        <option value="60">Sangat Tidak Cerdas</option>
                      </select>                
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="inputEmail3" class="col-sm-2 control-label">Attitude</label>

                       <div class="col-sm-10">
                      <select name="n_attitude" class="form-control" required>
                        <option></option>
                        <option value="100">Sangat Sopan</option>
                        <option value="90">Sopan</option>
                        <option value="80">Cukup Sopan</option>
                        <option value="70">Tidak Sopan</option>
                        <option value="60">Sangat Tidak Sopan</option>
                      </select>                    
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="inputEmail3" class="col-sm-2 control-label">Appearence</label>

                       <div class="col-sm-10">
                      <select name="n_appearance" class="form-control" required>
                        <option></option>
                        <option value="100">Sangat Menarik</option>
                        <option value="90">Menarik</option>
                        <option value="80">Cukup Menarik</option>
                        <option value="70">Tidak Menarik</option>
                        <option value="60">Sangat Tidak Menarik</option>
                      </select>                   
                       </div>
                    </div> 
                    <div class="form-group">
                       <label for="inputEmail3" class="col-sm-2 control-label">Confidence</label>

                       <div class="col-sm-10">
                      <select name="n_confidence" class="form-control" required>
                        <option></option>
                        <option value="100">Sangat Percaya Diri</option>
                        <option value="90">Percaya Diri</option>
                        <option value="80">Cukup Percaya Diri</option>
                        <option value="70">Tidak Percaya Diri</option>
                        <option value="60">Sangat Tidak Percaya Diri</option>
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
                  </div>                                  
                </div>
                <!-- /.box-body -->
              </form>                                        
                <?php  }
                  elseif ($id_role == 6) { ?>
                    <form class="form-horizontal" style="color:cornsilk" action="?module=simpan_nilai_semifinal_juri_kebudayaan_ww" method="post"> <div class="box-body">
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
                      <span style="color: red">Nilai Untuk Kriteria Tes Wawancara Kebudayaan</span>                    
                    </div>
                  </div>
                  <div class="form-group">                  

                    <div class="col-sm-12">
                       <div class="form-group">
                       <label for="inputEmail3" class="col-sm-2 control-label">Brain</label>

                       <div class="col-sm-10">
                      <select name="n_brain_kebudayaan" class="form-control" required>
                        <option></option>
                        <option value="100">Sangat Cerdas</option>
                        <option value="90">Cerdas</option>
                        <option value="80">Cukup Cerdas</option>
                        <option value="70">Tidak Cerdas</option>
                        <option value="60">Sangat Tidak Cerdas</option>
                      </select>                     
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="inputEmail3" class="col-sm-2 control-label">Behavior</label>

                       <div class="col-sm-10"> 
                      <select name="n_behavior_kebudayaan" class="form-control" required>
                        <option></option>
                        <option value="100">Sangat Sopan</option>
                        <option value="90">Sopan</option>
                        <option value="80">Cukup Sopan</option>
                        <option value="70">Tidak Sopan</option>
                        <option value="60">Sangat Tidak Sopan</option>
                      </select>                   
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="inputEmail3" class="col-sm-2 control-label">Kompetensi</label>

                       <div class="col-sm-10">
                      <select name="n_kompetensi_kebudayaan" class="form-control" required>
                        <option></option>
                        <option value="100">Sangat Baik</option>
                        <option value="90">Baik</option>
                        <option value="80">Cukup Baik</option>
                        <option value="70">Tidak Baik</option>
                        <option value="60">Sangat Tidak Baik</option>
                      </select>                    
                       </div>
                    </div> 
                    <div class="form-group">
                       <label for="inputEmail3" class="col-sm-2 control-label">integritas</label>

                       <div class="col-sm-10">
                      <select name="n_integritas_kebudayaan" class="form-control" required>
                        <option></option>
                        <option value="100">Sangat Baik</option>
                        <option value="90">Baik</option>
                        <option value="80">Cukup Baik</option>
                        <option value="70">Tidak Baik</option>
                        <option value="60">Sangat Tidak Baik</option>
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
                    </div>
                  </div>                                                                                              
                </div>
                <!-- /.box-body -->
              </form>                                        
                <?php  }
                  elseif ($id_role == 7) { ?>
                    <form class="form-horizontal" style="color:cornsilk" action="?module=simpan_nilai_semifinal_juri_kepemudaan_ww" method="post"> <div class="box-body">
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
                      <span style="color: red">Nilai Untuk Kriteria Tes Wawancara Kepemudaan</span>                    
                    </div>
                  </div>                                                                
                   <div class="form-group">                    

                    <div class="col-sm-12">
                       <div class="form-group">
                       <label for="inputEmail3" class="col-sm-2 control-label">Brain</label>

                       <div class="col-sm-10">
                      <select name="n_brain_kepemudaan" class="form-control" required>
                        <option></option>
                        <option value="100">Sangat Cerdas</option>
                        <option value="90">Cerdas</option>
                        <option value="80">Cukup Cerdas</option>
                        <option value="70">Tidak Cerdas</option>
                        <option value="60">Sangat Tidak Cerdas</option>
                      </select>                     
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="inputEmail3" class="col-sm-2 control-label">Behavior</label>

                       <div class="col-sm-10">                    
                      <select name="n_behavior_kepemudaan" class="form-control" required>
                        <option></option>
                        <option value="100">Sangat Sopan</option>
                        <option value="90">Sopan</option>
                        <option value="80">Cukup Sopan</option>
                        <option value="70">Tidak Sopan</option>
                        <option value="60">Sangat Tidak Sopan</option>
                      </select>    
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="inputEmail3" class="col-sm-2 control-label">Performance</label>

                       <div class="col-sm-10">
                      <select name="n_performance_kepemudaan" class="form-control" required>
                        <option></option>
                        <option value="100">Sangat Menarik</option>
                        <option value="90">Menarik</option>
                        <option value="80">Cukup Menarik</option>
                        <option value="70">Tidak Menarik</option>
                        <option value="60">Sangat Tidak Menarik</option>
                      </select>                      
                       </div>
                    </div> 
                    <div class="form-group">
                       <label for="inputEmail3" class="col-sm-2 control-label">Confidence</label>

                       <div class="col-sm-10">
                      <select name="n_confidence_kepemudaan" class="form-control" required>
                        <option></option>
                        <option value="100">Sangat Percaya Diri</option>
                        <option value="90">Percaya Diri</option>
                        <option value="80">Cukup Percaya Diri</option>
                        <option value="70">Tidak Percaya Diri</option>
                        <option value="60">Sangat Tidak Percaya Diri</option>
                      </select>                      
                       </div>
                    </div>
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
  </section>