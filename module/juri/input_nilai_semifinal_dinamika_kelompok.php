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
                    <form class="form-horizontal" style="color:cornsilk" action="?module=simpan_nilai_semifinal_juri_bing_dk" method="post"> <div class="box-body">
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
                                    <span style="color: red">Nilai Untuk Kriteria Dinamika Kelompok</span>                    
                                  </div>
                                </div>
                                 <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-2 control-label">Leadership</label>

                                  <div class="col-sm-10">
                                    <select name="n_leadership" class="form-control" required>
                                      <option></option>
                                      <option value="85">Sangat Aktif Memimpin Diskusi</option>
                                      <option value="80">Aktif Memimpin Diskusi</option>
                                      <option value="75">Cukup Aktif Memimpin Diskusi</option>
                                      <option value="70">Kurang Aktif Memimpin Diskusi</option>
                                      <option value="65">Sangat Kurang Memimpin Diskusi</option>
                                    </select>                                    
                                  </div>
                                </div> 
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-2 control-label">Public Speaking</label>

                                  <div class="col-sm-10">
                                    <select name="n_public_speaking" class="form-control" required>
                                      <option></option>
                                      <option value="85">Selalu Menanggapi Opini</option>
                                      <option value="80">Sering Menanggapi Opini</option>
                                      <option value="75">Cukup Sering Menanggapi Opini</option>
                                      <option value="70">Kurang Menanggapi Opini</option>
                                      <option value="65">Tidak Pernah Menanggapi Opini</option>
                                    </select>                   
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-2 control-label">Isi Proker</label>

                                  <div class="col-sm-10">
                                    <select name="n_isi_proker" class="form-control" required>
                                      <option></option>
                                      <option value="85">Skala Nasional</option>
                                      <option value="80">Skala Provinsi</option>
                                      <option value="75">Skala Kota</option>
                                      <option value="70">Skala Universitas</option>
                                      <option value="65">Skala SMA</option>
                                    </select> 
                                  </div>
                                </div> 
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-2 control-label">Team Work</label>

                                  <div class="col-sm-10">
                                    <input type="checkbox" name="n_teamwork[]" value="t1"> Menjelaskan opini pribadi<br>
                                    <input type="checkbox" name="n_teamwork[]" value="t2"> Menjawab pertanyaan dari kelompok lain<br>
                                    <input type="checkbox" name="n_teamwork[]" value="t3"> Menyanggah pendapat<br>
                                    <input type="checkbox" name="n_teamwork[]" value="t4"> Membela kelompok<br>
                                    <input type="checkbox" name="n_teamwork[]" value="t5"> Menutupi kekurangan kelompok<br>
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
                    <form class="form-horizontal" style="color:cornsilk" action="?module=simpan_nilai_semifinal_juri_psikologi_dk" method="post"> <div class="box-body">
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
                      <span style="color: red">Nilai Untuk Kriteria Dinamika Kelompok</span>                    
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Leadership</label>

                    <div class="col-sm-10">
                      <select name="n_leadership" class="form-control" required>
                        <option></option>
                        <option value="85">Sangat Aktif Memimpin Diskusi</option>
                        <option value="80">Aktif Memimpin Diskusi</option>
                        <option value="75">Cukup Aktif Memimpin Diskusi</option>
                        <option value="70">Kurang Aktif Memimpin Diskusi</option>
                        <option value="65">Sangat Kurang Memimpin Diskusi</option>
                      </select>                                    
                    </div>
                  </div> 
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Public Speaking</label>

                    <div class="col-sm-10">
                      <select name="n_public_speaking" class="form-control" required>
                        <option></option>
                        <option value="85">Selalu Menanggapi Opini</option>
                        <option value="80">Sering Menanggapi Opini</option>
                        <option value="75">Cukup Sering Menanggapi Opini</option>
                        <option value="70">Kurang Menanggapi Opini</option>
                        <option value="65">Tidak Pernah Menanggapi Opini</option>
                      </select>                   
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Isi Proker</label>

                    <div class="col-sm-10">
                      <select name="n_isi_proker" class="form-control" required>
                        <option></option>
                        <option value="85">Skala Nasional</option>
                        <option value="80">Skala Provinsi</option>
                        <option value="75">Skala Kota</option>
                        <option value="70">Skala Universitas</option>
                        <option value="65">Skala SMA</option>
                      </select> 
                    </div>
                  </div> 
                  <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Team Work</label>

                      <div class="col-sm-10">
                        <input type="checkbox" name="n_teamwork[]" value="t1"> Menjelaskan opini pribadi<br>
                        <input type="checkbox" name="n_teamwork[]" value="t2"> Menjawab pertanyaan dari kelompok lain<br>
                        <input type="checkbox" name="n_teamwork[]" value="t3"> Menyanggah pendapat<br>
                        <input type="checkbox" name="n_teamwork[]" value="t4"> Membela kelompok<br>
                        <input type="checkbox" name="n_teamwork[]" value="t5"> Menutupi kekurangan kelompok<br>
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
                    <form class="form-horizontal" style="color:cornsilk" action="?module=simpan_nilai_semifinal_juri_akademik_dk" method="post"> <div class="box-body">
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
                      <span style="color: red">Nilai Untuk Kriteria Dinamika Kelompok</span>                    
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Leadership</label>

                    <div class="col-sm-10">
                      <select name="n_leadership" class="form-control" required>
                        <option></option>
                        <option value="85">Sangat Aktif Memimpin Diskusi</option>
                        <option value="80">Aktif Memimpin Diskusi</option>
                        <option value="75">Cukup Aktif Memimpin Diskusi</option>
                        <option value="70">Kurang Aktif Memimpin Diskusi</option>
                        <option value="65">Sangat Kurang Memimpin Diskusi</option>
                      </select>                                    
                    </div>
                  </div> 
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Public Speaking</label>

                    <div class="col-sm-10">
                      <select name="n_public_speaking" class="form-control" required>
                        <option></option>
                        <option value="85">Selalu Menanggapi Opini</option>
                        <option value="80">Sering Menanggapi Opini</option>
                        <option value="75">Cukup Sering Menanggapi Opini</option>
                        <option value="70">Kurang Menanggapi Opini</option>
                        <option value="65">Tidak Pernah Menanggapi Opini</option>
                      </select>                   
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Isi Proker</label>

                    <div class="col-sm-10">
                      <select name="n_isi_proker" class="form-control" required>
                        <option></option>
                        <option value="85">Skala Nasional</option>
                        <option value="80">Skala Provinsi</option>
                        <option value="75">Skala Kota</option>
                        <option value="70">Skala Universitas</option>
                        <option value="65">Skala SMA</option>
                      </select> 
                    </div>
                  </div> 
                   <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Team Work</label>

                      <div class="col-sm-10">
                        <input type="checkbox" name="n_teamwork[]" value="t1"> Menjelaskan opini pribadi<br>
                        <input type="checkbox" name="n_teamwork[]" value="t2"> Menjawab pertanyaan dari kelompok lain<br>
                        <input type="checkbox" name="n_teamwork[]" value="t3"> Menyanggah pendapat<br>
                        <input type="checkbox" name="n_teamwork[]" value="t4"> Membela kelompok<br>
                        <input type="checkbox" name="n_teamwork[]" value="t5"> Menutupi kekurangan kelompok<br>
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
                    <form class="form-horizontal" style="color:cornsilk" action="?module=simpan_nilai_semifinal_juri_kebudayaan_dk" method="post"> <div class="box-body">
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
                      <span style="color: red">Nilai Untuk Kriteria Dinamika Kelompok</span>                    
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Leadership</label>

                    <div class="col-sm-10">
                      <select name="n_leadership" class="form-control" required>
                        <option></option>
                        <option value="85">Sangat Aktif Memimpin Diskusi</option>
                        <option value="80">Aktif Memimpin Diskusi</option>
                        <option value="75">Cukup Aktif Memimpin Diskusi</option>
                        <option value="70">Kurang Aktif Memimpin Diskusi</option>
                        <option value="65">Sangat Kurang Memimpin Diskusi</option>
                      </select>                                    
                    </div>
                  </div> 
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Public Speaking</label>

                    <div class="col-sm-10">
                      <select name="n_public_speaking" class="form-control" required>
                        <option></option>
                        <option value="85">Selalu Menanggapi Opini</option>
                        <option value="80">Sering Menanggapi Opini</option>
                        <option value="75">Cukup Sering Menanggapi Opini</option>
                        <option value="70">Kurang Menanggapi Opini</option>
                        <option value="65">Tidak Pernah Menanggapi Opini</option>
                      </select>                   
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Isi Proker</label>

                    <div class="col-sm-10">
                      <select name="n_isi_proker" class="form-control" required>
                        <option></option>
                        <option value="85">Skala Nasional</option>
                        <option value="80">Skala Provinsi</option>
                        <option value="75">Skala Kota</option>
                        <option value="70">Skala Universitas</option>
                        <option value="65">Skala SMA</option>
                      </select> 
                    </div>
                  </div> 
                   <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Team Work</label>

                      <div class="col-sm-10">
                        <input type="checkbox" name="n_teamwork[]" value="t1"> Menjelaskan opini pribadi<br>
                        <input type="checkbox" name="n_teamwork[]" value="t2"> Menjawab pertanyaan dari kelompok lain<br>
                        <input type="checkbox" name="n_teamwork[]" value="t3"> Menyanggah pendapat<br>
                        <input type="checkbox" name="n_teamwork[]" value="t4"> Membela kelompok<br>
                        <input type="checkbox" name="n_teamwork[]" value="t5"> Menutupi kekurangan kelompok<br>
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
                    <form class="form-horizontal" style="color:cornsilk" action="?module=simpan_nilai_semifinal_juri_kepemudaan_dk" method="post"> <div class="box-body">
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
                      <span style="color: red">Nilai Untuk Kriteria Dinamika Kelompok</span>                    
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Leadership</label>

                    <div class="col-sm-10">
                      <select name="n_leadership" class="form-control" required>
                        <option></option>
                        <option value="85">Sangat Aktif Memimpin Diskusi</option>
                        <option value="80">Aktif Memimpin Diskusi</option>
                        <option value="75">Cukup Aktif Memimpin Diskusi</option>
                        <option value="70">Kurang Aktif Memimpin Diskusi</option>
                        <option value="65">Sangat Kurang Memimpin Diskusi</option>
                      </select>                                    
                    </div>
                  </div> 
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Public Speaking</label>

                    <div class="col-sm-10">
                      <select name="n_public_speaking" class="form-control" required>
                        <option></option>
                        <option value="85">Selalu Menanggapi Opini</option>
                        <option value="80">Sering Menanggapi Opini</option>
                        <option value="75">Cukup Sering Menanggapi Opini</option>
                        <option value="70">Kurang Menanggapi Opini</option>
                        <option value="65">Tidak Pernah Menanggapi Opini</option>
                      </select>                   
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Isi Proker</label>

                    <div class="col-sm-10">
                      <select name="n_isi_proker" class="form-control" required>
                        <option></option>
                        <option value="85">Skala Nasional</option>
                        <option value="80">Skala Provinsi</option>
                        <option value="75">Skala Kota</option>
                        <option value="70">Skala Universitas</option>
                        <option value="65">Skala SMA</option>
                      </select> 
                    </div>
                  </div> 
                  <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Team Work</label>

                      <div class="col-sm-10">
                        <input type="checkbox" name="n_teamwork[]" value="t1"> Menjelaskan opini pribadi<br>
                        <input type="checkbox" name="n_teamwork[]" value="t2"> Menjawab pertanyaan dari kelompok lain<br>
                        <input type="checkbox" name="n_teamwork[]" value="t3"> Menyanggah pendapat<br>
                        <input type="checkbox" name="n_teamwork[]" value="t4"> Membela kelompok<br>
                        <input type="checkbox" name="n_teamwork[]" value="t5"> Menutupi kekurangan kelompok<br>
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