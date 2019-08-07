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
                        <?php

                 if ($_SESSION['id_role'] == 2) {
                   include 'module/koneksi.php';
                        $sqlSelect = "SELECT peserta.*, alternatif.* FROM peserta JOIN alternatif on peserta.nim=alternatif.alternatif WHERE `s_k3_bing`='belum' AND s_final='sudah' AND tolak='no'";                                                
                        $result = mysqli_query($koneksi, $sqlSelect); ?>
                        <div class="panel-body table-responsive">
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="background-color: #bb9e5d;">
                            <thead>
                                <tr>
                                    <th>No</th> 
                                    <th>No Peserta</th>                                   
                                    <th>Nama</th>  
                                    <th>Alamat</th>                                
                                    <th>Asal Kampus</th>  
                                    <th>Fakultas</th>
                                    <th>Jurusan</th>
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
                                <td><?php  echo $row['nim']; ?></td>                                                          
                                <td><?php  echo $row['nama']; ?></td>
                                <td><?php  echo $row['alamat']; ?></td>
                                <td><?php  echo $row['universitas']; ?></td>
                                <td><?php  echo $row['fakultas']; ?></td>
                                <td><?php  echo $row['jurusan']; ?></td>
                                <td>                                  
                                  <a href="?module=input_nilai_semifinal_proker&nim=<?php echo $row['nim']; ?>"><button type="button" class="btn btn-primary">Input Nilai</button></a>                                                  
                                </td>
                            </tr>
                    <?php
                        }
                    
                 }
                 elseif ($_SESSION['id_role'] == 4) {
                    include 'module/koneksi.php';
                        $sqlSelect = "SELECT peserta.*, alternatif.* FROM peserta JOIN alternatif on peserta.nim=alternatif.alternatif WHERE `s_k3_psiko`='belum' AND s_final='sudah' AND tolak='no'";                                               
                        $result = mysqli_query($koneksi, $sqlSelect); ?>

                      <div class="panel-body table-responsive">
                       <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="background-color: #bb9e5d;">
                            <thead>
                                <tr>
                                    <th>No</th> 
                                    <th>NIM</th>                                   
                                    <th>Nama</th>  
                                    <th>Alamat</th>                                
                                    <th>Asal Kampus</th>  
                                    <th>Fakultas</th>
                                    <th>Jurusan</th>
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
                                <td><?php  echo $row['nim']; ?></td>                                                          
                                <td><?php  echo $row['nama']; ?></td>
                                <td><?php  echo $row['alamat']; ?></td>
                                <td><?php  echo $row['universitas']; ?></td>
                                <td><?php  echo $row['fakultas']; ?></td>
                                <td><?php  echo $row['jurusan']; ?></td>
                                <td>                                  
                                  <a href="?module=input_nilai_semifinal_proker&nim=<?php echo $row['nim']; ?>"><button type="button" class="btn btn-primary">Input Nilai</button></a>                                                  
                                </td>
                            </tr>
                    <?php
                  } 
                }
                 elseif ($_SESSION['id_role'] == 5) {
                    include 'module/koneksi.php';
                        $sqlSelect = "SELECT peserta.*, alternatif.* FROM peserta JOIN alternatif on peserta.nim=alternatif.alternatif WHERE `s_k3_akademik`='belum' AND s_final='sudah' AND tolak='no'";                                                
                        $result = mysqli_query($koneksi, $sqlSelect); ?>

                      <div class="panel-body table-responsive">
                       <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="background-color: #bb9e5d;">
                            <thead>
                                <tr>
                                    <th>No</th> 
                                    <th>NIM</th>                                   
                                    <th>Nama</th>  
                                    <th>Alamat</th>                                
                                    <th>Asal Kampus</th>  
                                    <th>Fakultas</th>
                                    <th>Jurusan</th>
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
                                <td><?php  echo $row['nim']; ?></td>                                                          
                                <td><?php  echo $row['nama']; ?></td>
                                <td><?php  echo $row['alamat']; ?></td>
                                <td><?php  echo $row['universitas']; ?></td>
                                <td><?php  echo $row['fakultas']; ?></td>
                                <td><?php  echo $row['jurusan']; ?></td>
                                <td>                                  
                                  <a href="?module=input_nilai_semifinal_proker&nim=<?php echo $row['nim']; ?>"><button type="button" class="btn btn-primary">Input Nilai</button></a>                                                  
                                </td>
                            </tr>
                    <?php
                  } 
                }
                elseif ($_SESSION['id_role'] == 6) {
                    include 'module/koneksi.php';
                        $sqlSelect = "SELECT peserta.*, alternatif.* FROM peserta JOIN alternatif on peserta.nim=alternatif.alternatif WHERE `s_k3_kebudayaan`='belum' AND s_final='sudah' AND tolak='no'";                                                
                        $result = mysqli_query($koneksi, $sqlSelect); ?>

                      <div class="panel-body table-responsive">
                       <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="background-color: #bb9e5d;">
                            <thead>
                                <tr>
                                    <th>No</th> 
                                    <th>NIM</th>                                   
                                    <th>Nama</th>  
                                    <th>Alamat</th>                                
                                    <th>Asal Kampus</th>  
                                    <th>Fakultas</th>
                                    <th>Jurusan</th>
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
                                <td><?php  echo $row['nim']; ?></td>                                                          
                                <td><?php  echo $row['nama']; ?></td>
                                <td><?php  echo $row['alamat']; ?></td>
                                <td><?php  echo $row['universitas']; ?></td>
                                <td><?php  echo $row['fakultas']; ?></td>
                                <td><?php  echo $row['jurusan']; ?></td>
                                <td>                                  
                                  <a href="?module=input_nilai_semifinal_proker&nim=<?php echo $row['nim']; ?>"><button type="button" class="btn btn-primary">Input Nilai</button></a>                                                  
                                </td>
                            </tr>
                    <?php
                  } 
                }
                elseif ($_SESSION['id_role'] == 7) {
                    include 'module/koneksi.php';
                        $sqlSelect = "SELECT peserta.*, alternatif.* FROM peserta JOIN alternatif on peserta.nim=alternatif.alternatif WHERE `s_k3_kepemudaan`='belum' AND s_final='sudah' AND tolak='no'";                                                
                        $result = mysqli_query($koneksi, $sqlSelect); ?>

                      <div class="panel-body table-responsive">
                       <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="background-color: #bb9e5d;" >
                            <thead>
                                <tr>
                                    <th>No</th> 
                                    <th>NIM</th>                                   
                                    <th>Nama</th>  
                                    <th>Alamat</th>                                
                                    <th>Asal Kampus</th>  
                                    <th>Fakultas</th>
                                    <th>Jurusan</th>
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
                                <td><?php  echo $row['nim']; ?></td>                                                          
                                <td><?php  echo $row['nama']; ?></td>
                                <td><?php  echo $row['alamat']; ?></td>
                                <td><?php  echo $row['universitas']; ?></td>
                                <td><?php  echo $row['fakultas']; ?></td>
                                <td><?php  echo $row['jurusan']; ?></td>
                                <td>                                  
                                  <a href="?module=input_nilai_semifinal_proker&nim=<?php echo $row['nim']; ?>"><button type="button" class="btn btn-primary">Input Nilai</button></a>                                                  
                                </td>
                            </tr>
                    <?php
                  } 
                }
                 ?>
                        
                            </tbody>
                        </table>
                        </div>

                        
                </div>
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