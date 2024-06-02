<!-- Header -->
<?php
	$title = "Data Siswa"; // Judulnya
	require("../template/header.php"); // include headernya
?>



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
            <a href="tampilData.php" type="button" class="btn btn-primary daterange-btn icon-left btn-icon">
              <i class="fas fa-arrow-left"></i> Kembali 
            </a>
          </div>
          <div class="card-body">
          	
          	<div class="section-title mt-0 ml-4">Tambah Data Siswa</div>

            <!-- Tambah Data -->
            <form class="needs-validation" novalidate="" action="../../controller/admin/siswa.php" method="POST">
		      <div class="modal-body">
		        <div class="form-group">
		          <label>NIM</label>
		          <input type="number" class="form-control" name="nim" required="" minlength="8">
		          <!-- Validation -->
		          <div class="valid-feedback"> Baguss! </div>
		          <div class="invalid-feedback"> Minimal 8 kata</div>
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
		          <input type="varchar" class="form-control" name="kelas" required="" minlength="3" maxlength="16">
		          <!-- Validation -->
		          <div class="valid-feedback"> Baguss! </div>
				  <div class="invalid-feedback"> Wajib Diisi! </div>
		          <!-- End Validation -->
		        </div>
		        <div class="form-group">
		          <label>Prodi</label>
		          <input type="varchar" class="form-control" name="prodi" required="">
		          <!-- Validation -->
		          <div class="valid-feedback"> Baguss! </div>
		          <div class="invalid-feedback"> Wajib Diisi! </div>
		          <!-- End Validation -->
		        </div>
		        <div class="form-group">
		          <label>Angkatan</label>
		          <input type="varchar" class="form-control" name="angkatan" required="">
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
		          <a href="tampilData.php" type="button" class="btn btn-secondary">Batal</a>
		          <button class="btn btn-primary" name="tambahData">Simpan</button>
		        </div>
		      </div>
		    </form>
            <!-- penutup Tambah Data -->

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Penutup Isinya -->



<!-- Footer -->
<?php require("../template/footer.php");?>