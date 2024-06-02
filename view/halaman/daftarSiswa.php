<!-- Header -->
<?php
	session_start();
	$title = "Pendaftaran Booking class"; // Judulnya
	// require("../template/header.php"); // include headernya
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?= $title; ?> | </title>
  <link rel="icon" href="../../assets/img/avatar/icone.png">

  <!-- General CSS Files -->
  <link rel="stylesheet" href="../../assets/bootstrap-4/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../assets/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="../../assets/dataTables/css/dataTables.bootstrap4.min.css">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="../../assets/css/style.css">
  <link rel="stylesheet" href="../../assets/css/components.css">

  <!-- General JS Scripts -->
  <script src="../../assets/bootstrap-4/js/jquery-3.3.1.min.js"></script>
  <script src="../../assets/bootstrap-4/js/popper.min.js"></script>
  <script src="../../assets/bootstrap-4/js/bootstrap.min.js"></script>
  <script src="../../assets/bootstrap-4/js/jquery.nicescroll.min.js"></script>
  <script src="../../assets/bootstrap-4/js/moment.min.js"></script>
  <script src="../../assets/js/stisla.js"></script>
  <script src="../../assets/dataTables/js/jquery.dataTables.js"></script>
  <script src="../../assets/dataTables/js/dataTables.bootstrap4.min.js"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="../../assets/js/scripts.js"></script>
  <script src="../../assets/js/custom.js"></script>
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <?php if (isset($_SESSION['namaPeserta'])) { ?>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <!-- klo mau nambah menu notifikasi langsung ke websitenya aja (https://getstisla.com/) -->
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="../../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block"><?= $_SESSION['namaPeserta']; ?></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <!-- <div class="dropdown-title">Logged in 5 min ago</div> -->
              <a href="../../controller/admin/daftar.php?logout" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Keluar
              </a>
            </div>
          </li>
        </ul>
      </nav>
      	
      <!-- SIDEBAR -->
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href=""><img src="../../assets/img/avatar/icone.png" alt="LP" width="30px"> PPDB</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href=""><img src="../../assets/img/avatar/icone.png" alt="LP" width="47px"></a>
          </div>
          	<ul class="sidebar-menu">
              <li class="menu-header">Menu</li>
              <li class="nav-item dropdown active">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-book"></i><span>Pendatar</span></a>
                <ul class="dropdown-menu">
                  <li class="active"><a class="nav-link" href="daftarSiswa.php">Data Siswa</a></li>
                  <li><a class="nav-link" href="daftarOrtu.php">Data Orang Tua</a></li>
                </ul>
              </li>
            </ul>

            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <button class="btn btn-primary btn-lg btn-block btn-icon-split" onclick="cetak(<?= $_SESSION['nisnPeserta']; ?>)">
                <i class="fas fa-sign-out-alt"></i> Cetak Kartu Peserta
              </button>
            </div>
        </aside>
      </div>
      <?php } else { echo '<style>.main-content { padding-left: 30px; } .navbar { left: 30px; }</style>'; } ?>

      <!-- Main Content -->
      <div class="main-content">
          


<!-- Isinya -->

<section class="section">
  <div class="section-header">
    <h1><?= $title; ?></h1>
  </div>

  <?php
  	if (isset($_SESSION['alert'])) {
  		echo $_SESSION['alert'];
  		unset($_SESSION['alert']);
  	}
  ?>

  <div class="section-body">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <!-- <h4>Basic DataTables</h4> -->
            <a href="index.php" type="button" class="btn btn-primary daterange-btn icon-left btn-icon">
              <i class="fas fa-arrow-left"></i> Halaman Utama 
            </a>
          </div>
          <div class="card-body">
          	
          	<!-- Jika ada session daftar -->
          	<?php if (!isset($_SESSION['nama'])) { ?> 

          	<div class="section-title mt-0 ml-4">Data diri peserta</div>

            <!-- Form Tambah Data Siswa -->
            <form class="needs-validation" novalidate="" action="../../controller/admin/daftar.php" method="POST">
		      <div class="modal-body">
		        <div class="form-group">
		          <label>NIM</label>
		          <input type="varchar" class="form-control" name="nim" required="" minlength="8" maxlength="8">
		          <!-- Validation -->
		          <div class="valid-feedback"> Baguss! </div>
		          <div class="invalid-feedback"> Wajib 8 kata</div>
		          <!-- End Validation -->
		        </div>
		        <div class="form-group">
		          <label>Nama</label>
		          <input type="varchar" class="form-control" name="nama" required="" minlength="3" maxlength=50">
		          <!-- Validation -->
		          <div class="valid-feedback"> Baguss! </div>
				  <div class="invalid-feedback"> Wajib Diisi! </div>
		          <!-- End Validation -->
		        </div>
		        <div class="form-group">
		          <label>Kelas</label>
		          <input type="text" class="form-control" name="kelas" required="" minlength="3" maxlength="16">
		          <!-- Validation -->
		          <div class="valid-feedback"> Baguss! </div>
				  <div class="invalid-feedback"> Wajib Diisi! </div>
		          <!-- End Validation -->
		        </div>
		        <div class="form-group">
		          <label>Prodi</label>
		          <input type="text" class="form-control" name="prodi" required="">
		          <!-- Validation -->
		          <div class="valid-feedback"> Baguss! </div>
		          <div class="invalid-feedback"> Wajib Diisi! </div>
		          <!-- End Validation -->
		        </div>
		        <div class="form-group">
		          <label>Angkatan</label>
		          <input type="varchar" class="form-control" name="nama_lengkap" required="">
		          <!-- Validation -->
		          <div class="valid-feedback"> Baguss! </div>
		          <div class="invalid-feedback"> Wajib Diisi! </div>
		          <!-- End Validation -->
		        </div>
		        </div>
		        <div class="form-group">
		          <label>Jenis Kelamin</label>
		          <select class="form-control" name="jenis_kelamin" required="">
		            <option value=""> ~~~ PILIH JENIS KELAMIN ~~~ </option>
		            <option value="Laki-Laki">Laki-Laki</option>
		            <option value="Perempuan">Perempuan</option>
		          </select>
		          <!-- Validation -->
		          <div class="valid-feedback"> Baguss! </div>
		          <div class="invalid-feedback"> Wajib Diisi! </div>
		          <!-- End Validation -->
		        </div>
		       
		        <br>
		        <div class="modal-footer bg-whitesmoke br">
		          <button class="btn btn-primary" name="tambahDataSiswa">Simpan</button>
		        </div>
		      </div>
		    </form>
            <!-- penutup Form Tambah Data -->

            <!-- jika tidak ada session data peserta -->
        	<?php } else { ?>

          	<?php 
          		$idne = "";
          		if (!isset($_SESSION['nim'])) {
          			echo "<script>window.location.href = 'daftarSiswa.php';</script>";
          		}else {
          			$idne = $_SESSION['nim'];
          		}

          		include('../../config/connection.php');
                $data = mysqli_query($conn, "SELECT * FROM identitas_siswa WHERE nim = '$nim'") or die(mysqli_error($conn));

                if (mysqli_num_rows($data) != 1) {
					echo "<script>window.location.href = 'daftarSiswa.php';</script>";
				}
                
                foreach ($data as $row) { 
          	?>

            <div class="section-title mt-0 ml-4">Ubah Data Peserta</div>

            <!-- Ubah Data -->
            <form class="needs-validation" novalidate="" action="../../controller/admin/daftar.php" method="POST">
		      <div class="modal-body">
		      	<!-- Id data -->
		      	<input type="hidden" name="id" value="<?= $row['Id_Identitas_Siswa']; ?>">

				  <div class="form-group">
		          <label>NIM</label>
		          <input type="varchar" class="form-control" name="nim" required="" minlength="8" maxlength="8">
		          <!-- Validation -->
		          <div class="valid-feedback"> Baguss! </div>
		          <div class="invalid-feedback"> Wajib 8 kata</div>
		          <!-- End Validation -->
		        </div>
		        <div class="form-group">
		          <label>Nama</label>
		          <input type="varchar" class="form-control" name="nama" required="" minlength="3" maxlength=50">
		          <!-- Validation -->
		          <div class="valid-feedback"> Baguss! </div>
				  <div class="invalid-feedback"> Wajib Diisi! </div>
		          <!-- End Validation -->
		        </div>
		        <div class="form-group">
		          <label>Kelas</label>
		          <input type="text" class="form-control" name="kelas" required="" minlength="3" maxlength="16">
		          <!-- Validation -->
		          <div class="valid-feedback"> Baguss! </div>
				  <div class="invalid-feedback"> Wajib Diisi! </div>
		          <!-- End Validation -->
		        </div>
		        <div class="form-group">
		          <label>Prodi</label>
		          <input type="text" class="form-control" name="prodi" required="">
		          <!-- Validation -->
		          <div class="valid-feedback"> Baguss! </div>
		          <div class="invalid-feedback"> Wajib Diisi! </div>
		          <!-- End Validation -->
		        </div>
		    
		        </div>
		        </div>
		        <div class="form-group">
		          <label>Jenis Kelamin</label>
		          <select class="form-control" name="jenis_kelamin" required="">
		            <option value=""> ~~~ PILIH JENIS KELAMIN ~~~ </option>
		            <option value="Laki-Laki">Laki-Laki</option>
		            <option value="Perempuan">Perempuan</option>
		          </select>
		          <!-- Validation -->
		          <div class="valid-feedback"> Baguss! </div>
		          <div class="invalid-feedback"> Wajib Diisi! </div>
		          <!-- End Validation -->
		        </div>
		        <br>
		        <div class="modal-footer bg-whitesmoke br">
		          <button class="btn btn-primary" name="ubahDataSiswa">Simpan</button>
		        </div>
		      </div>
		    </form>
            <!-- penutup Tambah Data -->
        	<?php } ?>
        	<!-- Penutup Data peserta -->
        	<?php } ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Penutup Isinya -->

<!-- Fungsi untuk cetak -->
<script type="text/javascript">
  function cetak(id) {
    window.open("../cetak/index.php?id=" + id, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=50,left=100,width=900,height=460");
  }
</script>


<!-- Footer -->
          
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          
        </div>
        <div class="footer-right">
        
        </div>
      </footer>
    </div>
  </div>

</body>
</html>
