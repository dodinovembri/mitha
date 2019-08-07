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
            <li <?php if ($_GET["module"] == 'alternatif'){echo 'class="active"'; }?>><a href="?module=alternatif">ALTERNATIF</a></li>                       
            <li <?php if ($_GET["module"] == 'perhitungan'){echo 'class="active"'; }?>><a href="?module=perhitungan">PERHITUNGAN</a></li>                       
            <li <?php if ($_GET["module"] == 'hasil_penyisihan'){echo 'class="active"'; }?>><a href="?module=hasil_penyisihan">HASIL PENYISIHAN</a></li>
            <li <?php if ($_GET["module"] == 'analisa'){echo 'class="active"'; }?>><a href="?module=analisa">HASIL SEMIFINAL</a></li>
            <li>
                <a data-toggle="dropdown" data-target="#" href="#">
                    MONITORING <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="?module=penyisihan">Penyisihan</a></li>
                    <li><a href="?module=semifinal">Semifinal</a></li>                    
                </ul>
            </li>
            <li><a href="?module=logout">LOG OUT</a></li> 
          </ul>                            
        </div><!--/.nav-collapse -->       
      </div>          
    </nav> 
  </header>
  <!-- End header section -->