<?php
?>
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
              <a href="?module=input_data_peserta"><button type="button" class="btn btn-success btn-md">Tambah Data Peserta</button></a>
              <?php
                        include 'module/koneksi.php';
                        $sqlSelect = "SELECT * FROM peserta";
                        $result = mysqli_query($koneksi, $sqlSelect); ?>
              <table id="example" class="table" cellspacing="0" width="100%" style="background-color: #bb9e5d;">
                            <thead>
                                <tr>                                    
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
                              while ($row = mysqli_fetch_array($result)) {                               
                          ?>                                            
                                  <tr>                                    
                                      <td><?php  echo $row['nim']; ?></td>                                                          
                                      <td><?php  echo $row['nama']; ?></td>
                                      <td><?php  echo $row['alamat']; ?></td>
                                      <td><?php  echo $row['universitas']; ?></td>
                                      <td><?php  echo $row['fakultas']; ?></td>
                                      <td><?php  echo $row['jurusan']; ?></td>
                                      <td>                                  
                                        <a href="?module=update_data_peserta&nim=<?php echo $row['nim']; ?>"><button type="button" class="btn btn-warning">Update</button></a>
                                        <a href="?module=hapus_data_peserta&nim=<?php echo $row['nim']; ?>"><button class="btn btn-danger" onclick="return konfirmasi()">Delete</button></a>                                 
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
  <!-- End Reservation section -->
  <script>
$(document).ready(function() {
 $('#example').dataTable( {
        "language": {
            "url": "assets/css/datatables/Indonesian.json"
        }
    } );
} );
</script> 