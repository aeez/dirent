<?php
// include('./config/conn.php');
include('./config/functions/customer/functionKomentar.php');


$komentar = query("SELECT * FROM komentar INNER JOIN customer ON komentar.id_customer = customer.id_customer ORDER BY id_komentar");


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>DIRENT</title>
    <?php include('./app/layouts/font.php');?>
    <link rel="stylesheet" href="./app/assets/css/bootstrap/css/bootstrap.min.css">
    <link rel="shortcut icon" href="app/assets/img/logodirent.png" type="image/x-icon">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />
    <!-- css -->
    <link rel="stylesheet" href="./app/assets/css/footer2.css" />
    <link rel="stylesheet" href="./app/assets/css/homepage.css" />
  </head>
  <body>
<?php include ('./navbar.php'); ?>
    <!-- main start -->
    <main>
      <!-- home paeg -->
      <section class="home-page">
        <div class="container wrapper-home-page">
          <div class="row justify-content-center">
            <!-- home page caption -->
            <div
              class="col-10 col-lg-4 pb-2 pb-lg-0 caption d-flex align-items-end align-items-lg-center justify-content-center justify-content-lg-start"
            >
              <h1 class="text-center text-lg-start fst-italic fw-semibold">
                High Service <br />
                For Every <br />
                <span>Customer</span>
              </h1>
            </div>
            <!-- home page image -->
            <div
              class="col-10 col-lg-8 image d-flex align-items-start align-items-lg-center"
            >
              <img
                src="app/assets/img/jazzDua.png"
                alt="jazz"
                class="img-fluid"
              />
            </div>
          </div>
        </div>
      </section>
      <!-- home page -->

      <!-- service page -->
      <section class="services">
        <div class="container">
          <div class="row title text-center mb-4 mb-lg-5">
            <h1 class="fw-semibold fst-italic">DIRENT MENYEDIAKAN</h1>
          </div>
          <div class="row justify-content-center">
            <div class="col-10 col-lg-3 card border-0">
              <img
                src="app/assets/img/rocket.png"
                class="card-img-top w-75 m-auto pt-3"
                alt="services"
              />
              <div class="card-body text-center">
                <h5 class="fw-bold my-3">Fast & Easy Booking</h5>
                <p class="card-text">
                  Pesan mobil Anda secara online atau offline. Ikuti proses
                  mudah untuk memesan mobil Anda secara online. Atau hubungi
                  kami kapan saja dari mana saja
                </p>
              </div>
            </div>
            <div
              class="col-10 col-lg-3 card mx-0 mx-lg-4 my-3 my-lg-0 border-0"
            >
              <img
                src="app/assets/img/carRide.png"
                class="card-img-top w-75 m-auto pt-3"
                alt="services"
              />
              <div class="card-body text-center">
                <h5 class="fw-bold my-3">Banyak Lokasi Penjemputan</h5>
                <p class="card-text">
                  kami memiliki sejumlah besar mobil yang akan tersedia untuk
                  menjemput anda dari lokasi mana pun di seluruh wilayah
                </p>
              </div>
            </div>
            <div class="col-10 col-lg-3 card border-0">
              <img
                src="app/assets/img/comment.png"
                class="card-img-top w-75 m-auto pt-3"
                alt="services"
              />
              <div class="card-body text-center">
                <h5 class="fw-bold my-3">Kepuasan Pelanggan</h5>
                <p class="card-text">
                  Kami memiliki 300+ pelanggan yang senang dan terus bertambah.
                  Lihat bagian ulasan kami untuk mendapatkan umpan balik mereka
                  tentang layanan keluar
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- service page -->

      <!-- brand page -->
      <section class="brand">
        <div class="container">
          <div class="row justify-content-center">
            <div
              class="col-10 col-lg-6 logo-left d-flex justify-content-around mb-3 mb-lg-0"
            >
              <div class="logo">
                <img
                  src="app/assets/img/toyotaLogo.png"
                  alt="toyota"
                  class="img-fluid"
                />
              </div>
              <div class="logo">
                <img
                  src="app/assets/img/lexusLogo.png"
                  alt="toyota"
                  class="img-fluid"
                />
              </div>
            </div>
            <div
              class="col-10 col-lg-6 logo-right d-flex justify-content-around"
            >
              <div class="logo">
                <img
                  src="app/assets/img/MmitsubishiLogo.png"
                  alt="toyota"
                  class="img-fluid"
                />
              </div>
              <div class="logo">
                <img
                  src="app/assets/img/hondaLogo.png"
                  alt="toyota"
                  class="img-fluid"
                />
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- brand page -->

      <!-- question page -->
      <section class="question">
        <div class="container">
          <div class="row title text-center mb-4 mb-lg-5">
            <h1 class="fw-semibold">FAQ</h1>
          </div>
          <div class="row accordion-wrapper">
            <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseOne"
                    aria-expanded="false"
                    aria-controls="flush-collapseOne"
                  >
                    Bagaimana cara memesan mobil di DIRENT ?
                  </button>
                </h2>
                <div
                  id="flush-collapseOne"
                  class="accordion-collapse collapse"
                  aria-labelledby="flush-headingOne"
                  data-bs-parent="#accordionFlushExample"
                >
                  <div class="accordion-body">
                    Untuk pemesanan, bisa saja langsung ke halaman booking melalui navbar atau kamu juga bisa melihat mobil mobil yang disediakan oleh DIRENT di halaman catalog.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseTwo"
                    aria-expanded="false"
                    aria-controls="flush-collapseTwo"
                  >
                    Ada mobil apa saja di DIRENT ?
                  </button>
                </h2>
                <div
                  id="flush-collapseTwo"
                  class="accordion-collapse collapse"
                  aria-labelledby="flush-headingTwo"
                  data-bs-parent="#accordionFlushExample"
                >
                  <div class="accordion-body">
                    DIRENT memiliki jenis mobil mulai dari kelas menengah ke atas, untuk melihat mobil yang disediakan di DIRENT bisa dilihat di halaman catalog.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseThree"
                    aria-expanded="false"
                    aria-controls="flush-collapseThree"
                  >
                    Bagaimana cara cancel pemesanan di DIRENT ?
                  </button>
                </h2>
                <div
                  id="flush-collapseThree"
                  class="accordion-collapse collapse"
                  aria-labelledby="flush-headingThree"
                  data-bs-parent="#accordionFlushExample"
                >
                  <div class="accordion-body">
                    Cara cancel untuk pemesanan mobil, bisa langsung hubungi ke admin DIRENT.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- question page -->

      <!-- review page -->
      <section class="review">
        <div class="container">
          <div class="row title mb-5 mb-lg-5 text-center">
            <h1 class="fw-semibold">ULASAN PELANGGAN</h1>
          </div>

          <!-- tombol tambah komentar -->

          <?php if (isset($_SESSION['login'])) : ?>
          <div class="button-modal">
            <button type="button" class="btn d-flex m-auto mb-4 px-4 py-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Berikan ulasan Anda</button>
          </div>

          <!-- form -->

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header d-flex justify-content-center">
                  <h1 class="modal-title fs-5 " id="exampleModalLabel">Beri Ulasan</h1>
                </div>
                <div class="modal-body">
                  <form action="" method="POST" id="form-input">
                    <input type="hidden" name="id_komentar" id="id_komentar" value="0" />
                    <input type="hidden" name="id_customer" value="<?= $_SESSION['id_customer']; ?>">
                    <div class="mb-3">
                      <label for="ulasan" class="form-label">Ulasan</label>
                      <textarea class="form-control" id="komentar" rows="7" cols="10" name="komentar" style="resize: none;"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn close" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" name="submit" class="btn send" id="kirim">Kirim</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <?php endif; ?>

          <div class="row card-swipper">
            <div class="swiper mySwiper">
              <div class="swiper-wrapper">
                <?php foreach ($komentar as $dataKomentar) : ?>
                <div class="swiper-slide">
                  <div class="swiper-content p-3 w-100">
                    <h5 class="fw-bolder m-0"><?= $dataKomentar['nama_lengkap']; ?></h5>
                    <p class="swiper-title">Customer</p>
                    <p class="swiper-review"><?= $dataKomentar['komentar']; ?></p>
                  </div>
                </div>
                <?php endforeach; ?>
              </div>
              <!-- button -->
              <div class="swiper-button-next">
                <i class="bi bi-chevron-right"></i>
              </div>
              <div class="swiper-button-prev">
                <i class="bi bi-chevron-left"></i>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- review page -->

    </main>
    <!-- main end -->

<?php include ('./footer.php'); ?>
    <!-- js start -->
    <script src="app/assets/css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="app/assets/js/index.js"></script>
    <script src="app/assets/js/swiper.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- js end -->
    <?php
    if (isset($_POST['submit'])) {

      if (tambah($_POST) > 0) {
          echo "
              <script>
                Swal.fire(
                  'Sukses!',
                  'Terima kasih sudah memberikan ulasan!',
                  'success'
                ).then(()=> {
                    document.location.href = 'index.php'});
              </script>
          ";
      } else {
          echo "
              <script>
                  alert('Data gagal ditambah!');
                  document.location.href = 'index.php';
              </script>
          ";
      }
    }

    ?>
  </body>
</html>
