<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login &mdash; BCS</title>
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
  <!-- <script src="../../assets/bootstrap-4/js/popper.min.js"></script> -->
  <script src="../../assets/bootstrap-4/js/bootstrap.min.js"></script>
  <!-- <script src="../../assets/bootstrap-4/js/jquery.nicescroll.min.js"></script> -->
  <!-- <script src="../../assets/bootstrap-4/js/moment.min.js"></script> -->
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
    <section class="section">
      <div class="d-flex flex-wrap align-items-stretch">
        <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
          <div class="p-4 m-3">
            <img src="../../assets/style/images/logo.png" alt="logo" width="80" class="shadow-light rounded-circle mb-5 mt-2">
            <h4 class="text-dark font-weight-normal">Selamat datang di <span class="font-weight-bold">BCS</span></h4>
            <p class="text-muted">Sebelum Anda memulai, Anda harus masuk atau mendaftar jika Anda belum memiliki akun.</p>
            <?php
              if (isset($_SESSION['alert'])) {
                echo $_SESSION['alert'];
                unset($_SESSION['alert']);
              }
            ?>
            <form method="POST" action="../../controller/admin/daftar.php" class="needs-validation" novalidate="">
              <div class="form-group">
                <label for="nim">NIM</label>
                <input id="nisn" type="number" class="form-control" name="nim" tabindex="1" required autofocus>
                <div class="invalid-feedback">
                  Masukkan NIM anda!
                </div>
              </div>

              <div class="form-group">
                <div class="d-block">
                  <label for="nim" class="control-label">Password</label>
                </div>
                <input id="nim" type="number" class="form-control" name="nim" tabindex="1" required>
                <div class="invalid-feedback">
                  Masukkan NIM anda!
                </div>
              </div>

              <div class="form-group text-right">
                <a href="index.php" class="float-left mt-3">
                  <i class="fa fa-arrow-left"></i> Kembali
                </a>
                <button type="submit" name="loginDataPeserta" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                  Login
                </button>
              </div>

               <div class="mt-5 text-center">
                Belum punya akun? <a href="daftarSiswa.php">Daftar</a>
              </div>
            </form>

            <div class="text-center mt-5 text-small">
            
            </div>
          </div>
        </div>
        

</body>
</html>
