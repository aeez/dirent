<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Home Page</title>
    <?php include('./app/layouts/font.php');?>
    <link rel="stylesheet" href="./app/assets/css/bootstrap/css/bootstrap.min.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css"
      integrity="sha512-ELV+xyi8IhEApPS/pSj66+Jiw+sOT1Mqkzlh8ExXihe4zfqbWkxPRi8wptXIO9g73FSlhmquFlUOuMSoXz5IRw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- css -->
    <link rel="stylesheet" href="./app/assets/css/footer2.css" />
    <link rel="stylesheet" href="./app/assets/css/booking.css" />
  </head>
  <body>
<?php include ('./navbar.php'); ?>
    <!-- main start -->
    <main class="pt-5">
      <section id="booking" class="py-5">
        <div class="container justify-content-center">
          <div class="booking-header py-4">
            <div class="section-title text-center">
              <h1 class="fw-bold">BOOKING</h1>
            </div>
          </div>
          <div class="booking-col my-3">
            <div class="row row-card justify-content-center">
              <!-- booking form -->
              <div class="col-10 col-lg-5 mb-5">
                <div class="p-4 booking-card">
                  <div class="card-title my-3">
                    <h2 class="text-center fw-bold">BOOKING FORM</h2>
                  </div>
                  <div class="card-form mt-5">
                    <form action="">
                      <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input
                          type="text"
                          class="form-control"
                          id="nama"
                          placeholder="Nama"
                          required
                        />
                      </div>
                      <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input
                          type="text"
                          class="form-control"
                          id="alamat"
                          placeholder="Alamat"
                          required
                        />
                      </div>
                      <div class="mb-3">
                        <label for="telepon" class="form-label"
                          >No. Telepon</label
                        >
                        <input
                          type="number"
                          class="form-control"
                          id="telepon"
                          placeholder="No. Telepon"
                          required
                        />
                      </div>
                      <div class="mb-3">
                        <label for="mobil" class="form-label">Nama Mobil</label>
                        <select
                          class="form-select"
                          aria-label="Default select example"
                        >
                          <option selected>Pilih Mobil</option>
                          <option value="1">Avanza</option>
                          <option value="2">Innova</option>
                          <option value="3">Alphard</option>
                          <option value="4">Camry</option>
                          <option value="5">Pajero Sport</option>
                          <option value="6">Fortuner</option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="dateFrom" class="form-label"
                          >Dari Tanggal</label
                        >
                        <input
                          type="text"
                          class="form-control"
                          id="dateFrom"
                          placeholder="Pilih Tanggal"
                        />
                      </div>
                      <div class="mb-3">
                        <label for="dateTo" class="form-label"
                          >Sampai Tanggal</label
                        >
                        <input
                          type="text"
                          class="form-control"
                          id="dateTo"
                          placeholder="Pilih Tanggal"
                        />
                      </div>
                      <div class="mb-4">
                        <label for="kotaTujuan" class="form-label"
                          >Kota Tujuan</label
                        >
                        <input
                          type="text"
                          class="form-control"
                          id="kotaTujuan"
                          placeholder="Kota Tujuan"
                          required
                        />
                      </div>
                      <div class="mb-2 text-end">
                        <button type="sumbit" class="btn btn-kirim px-5">
                          Kirim
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- S&K -->
              <div class="col-10 col-lg-5 mb-5">
                <div class="p-4 syarat-card">
                  <div class="card-title my-3">
                    <h2 class="fw-bold text-center">SYARAT DAN KETENTUAN</h2>
                  </div>
                  <div class="card-list mt-5">
                    <div class="mb-3">
                      <h5>PERSYARATAN PERORANGAN</h5>
                      <ul>
                        <li>Fotocopy SIM</li>
                        <li>Fotocopy KTP</li>
                        <li>Fotocopy KK</li>
                        <li>Memiliki Penjamin</li>
                        <li>Bersedia untuk kami survey tempat tinggal Anda</li>
                      </ul>
                    </div>
                    <div class="mb-3">
                      <h5>PERSYARATAN PERUSAHAAN</h5>
                      <ul>
                        <li>Fotocopy SIUP dan NPWP</li>
                        <li>Fotocopy akte pendirian perusahaan</li>
                        <li>Memiliki Penjamin</li>
                        <li>Fotocopy SIM pengemudi</li>
                        <li>
                          Fotocopy KTP direksi, atau pejabat yang bertanggung
                          jawab
                        </li>
                        <li>
                          Bersedia untuk kami survey tempat tinggal Pemohon
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!-- main end -->

<?php include ('./footer.php'); ?>
    <!-- js start -->
    <script src="app/assets/css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script
      src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"
      integrity="sha256-lSjKY0/srUM9BE3dPm+c4fBo1dky2v27Gdjm2uoZaL0="
      crossorigin="anonymous"
    ></script>
    <script src="app/assets/js/index.js"></script>
    <script src="app/assets/js/date.js"></script>
    <!-- js end -->
  </body>
</html>