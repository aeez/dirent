<?php

include('./config/functions/customer/functionMobil.php');

$mobil = query("SELECT * FROM mobil");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Catalog DIRENT</title>
    <?php include('./app/layouts/font.php');?>
    <link rel="stylesheet" href="./app/assets/css/bootstrap/css/bootstrap.min.css">
    <link rel="shortcut icon" href="app/assets/img/logodirent.png" type="image/x-icon">
    <!-- css -->
    <link rel="stylesheet" href="./app/assets/css/footer2.css" />
    <link rel="stylesheet" href="./app/assets/css/catalogue.css" />
  </head>
  <body>
<?php include ('./navbar.php'); ?>
    <!-- main start -->
    <main class="pt-5">
      <section id="catalog" class="py-5">
        <div class="container justify-content-center">
          <div class="catalog-header py-4">
            <div class="section-title text-center">
              <h1 class="fw-bold">CATALOG</h1>
              <h6 class="catalog-description">
                Kami Menyediakan Beberapa Mobil Mulai dari Kelas Menengah ke
                Atas
              </h6>
            </div>
          </div>
          <div class="catalog-card my-3">
            <div class="row row-card justify-content-center">
              <?php foreach ($mobil as $dataMobil) : ?>
              <div class="col-10 col-lg-4 mb-5 col-card">
                <div class="card-car p-3">
                  <div class="card-image pt-1">
                    <img
                      src="./app/img/<?= $dataMobil['gambar']; ?>"
                      alt=""
                      class="w-100"
                    />
                  </div>
                  <div class="card-title fw-bold my-2 ms-3">
                    <h6 class="fw-bold"><?= $dataMobil["nama_mobil"] ?> (<?= $dataMobil["tahun_mobil"] ?>)</h6>
                    <p>Rp. <?= number_format($dataMobil["harga"], 0, ".", "."); ?>/hari</p>
                  </div>
                  <div class="card-features mt-2">
                    <div class="row justify-content-between">
                      <div class="col-3 text-center">
                        <button class="btn mb-2">
                          <i class="bi bi-person-circle fs-4"></i>
                        </button>
                        <p class="text-muted"><?= $dataMobil["kursi"] ?> Kursi</p>
                      </div>
                      <div class="col-3 text-center">
                        <button class="btn mb-2">
                          <i class="bi bi-snow fs-4"></i>
                        </button>
                        <p class="text-muted">AC</p>
                      </div>
                      <div class="col-3 text-center">
                        <button class="btn mb-2">
                          <i class="bi bi-joystick fs-4"></i>
                        </button>
                        <p class="text-muted"><?= $dataMobil["transmisi"] ?></p>
                      </div>
                      <div class="col-3 text-center">
                        <button class="btn mb-2">
                          <i class="bi bi-fuel-pump-fill fs-4"></i>
                        </button>
                        <p class="text-muted"><?= $dataMobil["bensin"] ?></p>
                      </div>
                    </div>
                  </div>
                  <div class="card-btn mt-3">
                    <div class="row">
                      <div class="col-12 col-lg-6"></div>
                      <div class="col-12 col-lg-6 text-end">
                        <form action="" method="post">
                          <button type="submit" name="submit" class="btn btn-sewa px-4">Sewa Mobil</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!-- main end -->

<?php include ('./footer.php'); ?>
    <!-- js start -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="app/assets/css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="app/assets/js/index.js"></script>
    
    <?php 
    if (isset($_POST['submit'])) {
      if (isset($_SESSION['login'])) {
        echo "
            <script>
              document.location.href = 'pemesanan.php';
            </script>
          ";
      }else{
        echo "
          <script>
              Swal.fire({
              icon: 'error',
              title: 'Anda belum Login!',
              text: 'Silahkan login terlebih dahulu',
            }).then(()=> {
                  document.location.href = 'catalogue.php'})
          </script>
        ";
      }
    }
    ?>


    <!-- js end -->
  </body>
</html>
