          <?php                  
            include 'module/koneksi.php';
            $a = $_SESSION['username'];
            $query = "SELECT * FROM user WHERE username='$a'";
            $hasil = mysqli_query($koneksi, $query);

            while ($row = mysqli_fetch_array($hasil)) {
              $nama = $row['nama'];
              $jabatan = $row['jabatan'];
              $photo = $row['photo'];
            }
          ?>

          <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right mu-main-nav">
            <li <?php if ($_GET["module"] == 'home'){echo 'class="active"'; }?>><a href="?module=home">HOME</a></li>
            <li <?php if ($_GET["module"] == 'data_peserta'){echo 'class="active"'; }?>><a href="?module=data_peserta">PESERTA</a></li>                       
            <li <?php if ($_GET["module"] == 'data_juri'){echo 'class="active"'; }?>><a href="?module=data_juri">JURI</a></li>                       
            <li <?php if ($_GET["module"] == 'data_user'){echo 'class="active"'; }?>><a href="?module=data_user">USER</a></li>

            <li>
                <a data-toggle="dropdown" data-target="#" href="#">
                    LAPORAN <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="?module=lap_bujang">Bujang</a></li>
                    <li><a href="?module=lap_gadis">Gadis</a></li>                    
                </ul>
            </li>

            <li><a href="?module=logout">LOG OUT</a></li>
          </ul>                            
        </div><!--/.nav-collapse -->       
      </div>          
    </nav> 
  </header>
  <!-- End header section -->