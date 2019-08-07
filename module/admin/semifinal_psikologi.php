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
                  <a href="?module=input_data_juri"><button type="button" class="btn btn-success btn-md">Tambah Data Juri</button></a>
            <ul id="top-menu" class="nav navbar-nav mu-main-nav" style="float: right;">
            <li>
                <a data-toggle="dropdown" data-target="#" href="#" style="color: white">
                    Filter <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="?module=penyisihan_tertulis">Penyisihan-Tertulis</a></li>
                    <li><a href="?module=penyisihan_psikotest">Penyisihan-Psikotest</a></li>                    
                    <li><a href="?module=penyisihan_wii">Penyisihan-WII</a></li>
                    <li><a href="?module=semifinal_bing">Semifinal-Bahasa Inggris</a></li>
                    <li><a href="?module=semifinal_psikologi">Semifinal-Psikologi</a></li>
                    <li><a href="?module=semifinal_akademik">Semifinal-Akademik</a></li>
                    <li><a href="?module=semifinal_kebudayaan">Semifinal-Kebudayaan</a></li>
                    <li><a href="?module=semifinal_kepemudaan">Semifinal-Kepemudaan</a></li>
                </ul>
            </li>
                  </ul>

                  <br>
                         <?php
                        include 'module/koneksi.php';
                        $sqlSelect = "SELECT user.*, role.role as role FROM user join role on user.id_role = role.id_role  where user.id_role=4";                        
                        $result = mysqli_query($koneksi, $sqlSelect); ?>
                  <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="background-color: #bb9e5d;">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIM / NIK</th>                                    
                                    <th>Nama</th>  
                                     <!-- <th>Jabatan</th>                                 -->
                                    <th>Hak Akses</th>                                      
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                          <?php
                              $no = 0;
                              while ($row = mysqli_fetch_array($result)) {
                                $no++;
                          ?>                                            
                                  <tr>
                                      <td><?php echo $no; ?></td>   
                                      <td><?php  echo $row['username']; ?></td>              
                                      <td><?php  echo $row['nama']; ?></td>    
                                       <!-- <td><?php  echo $row['jabatan']; ?></td> -->
                                      <td><?php  echo $row['role']; ?></td>                   
                                      <td>                                  
                                      <a href="?module=update_data_juri&username=<?php echo $row['username']; ?>"><button type="button" class="btn btn-warning">Update</button></a>
                                        <a href="?module=hapus_data_juri&username=<?php echo $row['username']; ?>"><button class="btn btn-danger" onclick="return konfirmasi()">Delete</button></a>                                
                                      </td>
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
  </section>
  <script>
    $(document).ready(function() {
     $('#example').dataTable( {
            "language": {
                "url": "assets/css/datatables/Indonesian.json"
            }
        } );
    } );
    </script> 