<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <?php include('./app/layouts/font.php');?>
    <link rel="stylesheet" href="./app/assets/css/bootstrap/css/bootstrap.min.css">
    <!-- css -->
    <link rel="stylesheet" href="./app/assets/css/footer2.css" />
    <link rel="stylesheet" href="./app/assets/css/about.css" />
  </head>
  <body>
<?php include ('./navbar.php'); ?>
    
<main class="pt-5">
      <!-- about page -->
      <section class="container about py-5">
        <div class="row title text-center py-4">
          <h1 class="fw-bold">ABOUT US</h1>
          <p>Cari tahu secara singkat tapi informatif tentang kami</p>
        </div>
        <div class="row about-main">
          <div class="col-lg-6 left-page d-lg-flex justify-content-lg-center">
            <div class="background-image">
              <img src="app/assets/img/jazzSatu.png" alt="jazz" />
            </div>
          </div>
          <div class="col-lg-6 right-page text-center text-lg-start">
            <div class="about-logo">
              <h1 class="fst-italic fw-bold">DIRENT</h1>
            </div>
            <div class="about-caption mb-4">
              <p>
                <span>DIRENT</span> Rental Merupakan sebuah usaha di Kota Medan
                yang berfokus dalam bidang jasa sewa mobil dalam Kota maupun
                daerah sekeliling Kota Medan. <span>DIRENT</span> menjadi
                kedaraan terpercaya oleh Artis atau Band Ibu kota Jakarta untuk
                melakukan kunjugan nya selama berada di Medan.
              </p>
            </div>
            <div class="about-services d-flex justify-content-around p-3">
              <div class="service-list text-center">
                <i class="bi bi-stopwatch"></i>
                <p class="mb-0">24/7 eksklusif di jalan</p>
              </div>
              <div class="service-list text-center">
                <i class="bi bi-car-front"></i>
                <p class="mb-0">Dari kelas menengah keatas</p>
              </div>
              <div class="service-list text-center">
                <i class="bi bi-window-dock"></i>
                <p class="mb-0">Pesan melalui website</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- about page -->
    </main>

<?php include ('./footer.php'); ?>
    <!-- js start -->
    <script src="app/assets/css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="app/assets/js/index.js"></script>
    <!-- js end -->
  </body>
</html>
