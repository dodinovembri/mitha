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
            <li <?php if ($_GET["module"] == 'input_nilai'){echo 'class="active"'; }?>><a href="?module=input_nilai">INPUT NILAI</a></li>
            <li><a href="?module=logout">LOG OUT</a></li>
          </ul>                            
        </div><!--/.nav-collapse -->       
      </div>          
    </nav> 
  </header>
  <!-- End header section -->