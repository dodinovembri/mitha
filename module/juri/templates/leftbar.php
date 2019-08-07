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
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="blog-archive.html"> INPUT NILAI <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">                
                <li><a href="?module=nilai_semifinal_dinamika_kelompok">Dinamika Kelompok</a></li>
                <li><a href="?module=nilai_semifinal_ww">Wawancara</a></li>
                <li><a href="?module=nilai_semifinal_proker">Program Kerja</a></li>
              </ul>
            </li>
            <li <?php if ($_GET["module"] == 'alternatif'){echo 'class="active"'; }?>><a href="?module=alternatif">ALTERNATIF</a></li>                       
            <!-- <li <?php if ($_GET["module"] == 'perhitungan'){echo 'class="active"'; }?>><a href="?module=perhitungan">PERHITUNGAN</a></li>                        -->
            <li <?php if ($_GET["module"] == 'analisa'){echo 'class="active"'; }?>><a href="?module=analisa">ANALISA</a></li>
            <li><a href="?module=logout">LOG OUT</a></li>
          </ul>                            
        </div><!--/.nav-collapse -->       
      </div>          
    </nav> 
  </header>
  <!-- End header section -->