<!-- Header -->
<?php
  $title = "Dashboard"; // Judulnya
  require("../template/header.php"); // include headernya

  include('../../config/connection.php'); // database
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

  
       
  <!-- hmm -->

  </div>
</section>

<!-- Penutup Isinya -->



<!-- Footer -->
<?php require("../template/footer.php");?>