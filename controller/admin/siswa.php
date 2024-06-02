<?php 
	
	session_start();
	include("../../config/connection.php");

	// Tambah Data
	if (isset($_POST['tambahData'])) {
		$nim 				= mysqli_real_escape_string($conn, $_POST['nim']); 
		$nama				= mysqli_real_escape_string($conn, $_POST['nama']); 
		$kelas				= mysqli_real_escape_string($conn, $_POST['kelas']); 
		$prodi				= mysqli_real_escape_string($conn, $_POST['prodi']); 
		$jenis_kelamin		= mysqli_real_escape_string($conn, $_POST['jenis_kelamin']); 

		$query = mysqli_query($conn, "INSERT INTO identitas_siswa SET nim = '$nim',
																	  nama = '$nama',
																	  kelas = '$kelas',
																	  prodi  = '$prodi',
																	  jenis_Kelamin = '$jenis_kelamin',
																	
		if($query) {
			$_SESSION['alert'] = '<div class="alert alert-success alert-has-icon" id="alert">
			                        <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
			                        <div class="alert-body">
			                          <button class="close" data-dismiss="alert">
			                            <span>×</span>
			                          </button>
			                          <div class="alert-title">Berhasil</div>
			                          Data berhasil ditambahkan.
			                        </div>
			                      </div>';
			header('Location: ../../view/siswa/tampilData.php');
		} else {
			$_SESSION['alert'] = '<div class="alert alert-danger alert-has-icon" id="alert">
			                        <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
			                        <div class="alert-body">
			                          <button class="close" data-dismiss="alert">
			                            <span>×</span>
			                          </button>
			                          <div class="alert-title">Gagal</div>
			                          Data gagal ditambahkan.
			                        </div>
			                      </div>';
			header('Location: ../../view/siswa/tampilData.php');
		}
	}

	// Ubah Data
	if (isset($_POST['ubahData'])) {
		$id 				= $_POST['id'];
		$nim				= mysqli_real_escape_string($conn, $_POST['nim']); 
		$nama				= mysqli_real_escape_string($conn, $_POST['nama']); 
		$kelas				= mysqli_real_escape_string($conn, $_POST['kelas']); 
		$prodi				= mysqli_real_escape_string($conn, $_POST['prodi']);  
		$jenis_kelamin		= mysqli_real_escape_string($conn, $_POST['jenis_kelamin']); 

		$query = mysqli_query($conn, "UPDATE identitas_siswa SET nim = '$nim',
																 nama = '$nama',
																 kelas = '$kelas',
																 nama = '$nama',
																 kelas = '$kelas',
																 prodi = '$prodi',
																 Jenis_Kelamin = '$jenis_kelamin',
									  					WHERE Id_Mahasiswa= '$id' ") or die(mysqli_error($conn));

		if($query) {
			$_SESSION['alert'] = '<div class="alert alert-success alert-has-icon" id="alert">
			                        <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
			                        <div class="alert-body">
			                          <button class="close" data-dismiss="alert">
			                            <span>×</span>
			                          </button>
			                          <div class="alert-title">Berhasil</div>
			                          Data berhasil diubah.
			                        </div>
			                      </div>';
			header('Location: ../../view/siswa/tampilData.php');
		} else {
			$_SESSION['alert'] = '<div class="alert alert-danger alert-has-icon" id="alert">
			                        <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
			                        <div class="alert-body">
			                          <button class="close" data-dismiss="alert">
			                            <span>×</span>
			                          </button>
			                          <div class="alert-title">Gagal</div>
			                          Data gagal diubah.
			                        </div>
			                      </div>';
			header('Location: ../../view/siswa/tampilData.php');
		}
	}

	// Hapus Data
	if (isset($_GET['hapusData'])) {
		$id = $_GET['hapusData'];

		$query = mysqli_query($conn, "DELETE FROM identitas_siswa WHERE Id_Mahasiswa = $id");

		if($query) {
			$_SESSION['alert'] = '<div class="alert alert-success alert-has-icon" id="alert">
			                        <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
			                        <div class="alert-body">
			                          <button class="close" data-dismiss="alert">
			                            <span>×</span>
			                          </button>
			                          <div class="alert-title">Berhasil</div>
			                          Data berhasil dihapus.
			                        </div>
			                      </div>';
			header('Location: ../../view/siswa/tampilData.php');
		} else {
			$_SESSION['alert'] = '<div class="alert alert-danger alert-has-icon" id="alert">
			                        <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
			                        <div class="alert-body">
			                          <button class="close" data-dismiss="alert">
			                            <span>×</span>
			                          </button>
			                          <div class="alert-title">Gagal</div>
			                          Data gagal dihapus.
			                        </div>
			                      </div>';
			header('Location: ../../view/siswa/tampilData.php');
		}
	}

?>