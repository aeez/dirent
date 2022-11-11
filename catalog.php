<?php 

include('./config/conn.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Home Page</title>
    <?php include('./app/layouts/font.php');?>
    <link rel="stylesheet" href="./app/assets/css/bootstrap/css/bootstrap.min.css">
    <!-- css -->
    <link rel="stylesheet" href="./app/assets/css/footer2.css" />
    <link rel="stylesheet" href="./app/assets/css/newcatalog.css" />
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
              <!-- avanza -->
              <div class="col-10 col-lg-4 mb-5 col-card">
                <div class="card-car p-3">
                  <div class="card-image pt-1">
                    <img
                      src="app/assets/img/mobil/avanza.png"
                      alt=""
                      class="w-100"
                    />
                  </div>
                  <div class="card-title fw-bold my-2 ms-3">
                    <h6 class="fw-bold">Avanza (2015)</h6>
                    <p>Rp. 350.000/hari</p>
                  </div>
                  <div class="card-features mt-2">
                    <div class="row justify-content-between">
                      <div class="col-3 text-center">
                        <button class="btn mb-2">
                          <i class="bi bi-person-circle fs-4"></i>
                        </button>
                        <p class="text-muted">6 Seats</p>
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
                        <p class="text-muted">Matic</p>
                      </div>
                      <div class="col-3 text-center">
                        <button class="btn mb-2">
                          <i class="bi bi-fuel-pump-fill fs-4"></i>
                        </button>
                        <p class="text-muted">Pertamax</p>
                      </div>
                    </div>
                  </div>
                  <div class="card-btn mt-3">
                    <div class="row">
                      <div class="col-12 col-lg-6"></div>
                      <div class="col-12 col-lg-6 text-end">
                        <button class="btn btn-sewa px-4">Sewa Mobil</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Innova -->
              <div class="col-10 col-lg-4 mb-5 col-card">
                <div class="card-car p-3">
                  <div class="card-image pt-1">
                    <img
                      src="app/assets/img/mobil/innova.png"
                      alt=""
                      class="w-100"
                    />
                  </div>
                  <div class="card-title fw-bold my-2 ms-3">
                    <h6 class="fw-bold">Innova (2016)</h6>
                    <p>Rp. 500.000/hari</p>
                  </div>
                  <div class="card-features mt-2">
                    <div class="row justify-content-between">
                      <div class="col-3 text-center">
                        <button class="btn mb-2">
                          <i class="bi bi-person-circle fs-4"></i>
                        </button>
                        <p class="text-muted">6 Seats</p>
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
                        <p class="text-muted">Matic</p>
                      </div>
                      <div class="col-3 text-center">
                        <button class="btn mb-2">
                          <i class="bi bi-fuel-pump-fill fs-4"></i>
                        </button>
                        <p class="text-muted">Pertamax</p>
                      </div>
                    </div>
                  </div>
                  <div class="card-btn mt-3">
                    <div class="row">
                      <div class="col-12 col-lg-6"></div>
                      <div class="col-12 col-lg-6 text-end">
                        <button class="btn btn-sewa px-4">Sewa Mobil</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Alphard -->
              <div class="col-10 col-lg-4 mb-5 col-card">
                <div class="card-car p-3">
                  <div class="card-image pt-1">
                    <img
                      src="app/assets/img/mobil/alphard.png"
                      alt=""
                      class="w-100"
                    />
                  </div>
                  <div class="card-title fw-bold my-2 ms-3">
                    <h6 class="fw-bold">Alphard (2020)</h6>
                    <p>Rp. 1.300.000/hari</p>
                  </div>
                  <div class="card-features mt-2">
                    <div class="row justify-content-between">
                      <div class="col-3 text-center">
                        <button class="btn mb-2">
                          <i class="bi bi-person-circle fs-4"></i>
                        </button>
                        <p class="text-muted">6 Seats</p>
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
                        <p class="text-muted">Matic</p>
                      </div>
                      <div class="col-3 text-center">
                        <button class="btn mb-2">
                          <i class="bi bi-fuel-pump-fill fs-4"></i>
                        </button>
                        <p class="text-muted">Pertamax</p>
                      </div>
                    </div>
                  </div>
                  <div class="card-btn mt-3">
                    <div class="row">
                      <div class="col-12 col-lg-6"></div>
                      <div class="col-12 col-lg-6 text-end">
                        <button class="btn btn-sewa px-4">Sewa Mobil</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Camry -->
              <div class="col-10 col-lg-4 mb-5 col-card">
                <div class="card-car p-3">
                  <div class="card-image pt-1">
                    <img
                      src="app/assets/img/mobil/camry.png"
                      alt=""
                      class="w-100"
                    />
                  </div>
                  <div class="card-title fw-bold my-2 ms-3">
                    <h6 class="fw-bold">Camry (2015)</h6>
                    <p>Rp. 850.000/hari</p>
                  </div>
                  <div class="card-features mt-2">
                    <div class="row justify-content-between">
                      <div class="col-3 text-center">
                        <button class="btn mb-2">
                          <i class="bi bi-person-circle fs-4"></i>
                        </button>
                        <p class="text-muted">4 Seats</p>
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
                        <p class="text-muted">Matic</p>
                      </div>
                      <div class="col-3 text-center">
                        <button class="btn mb-2">
                          <i class="bi bi-fuel-pump-fill fs-4"></i>
                        </button>
                        <p class="text-muted">Pertamax</p>
                      </div>
                    </div>
                  </div>
                  <div class="card-btn mt-3">
                    <div class="row">
                      <div class="col-12 col-lg-6"></div>
                      <div class="col-12 col-lg-6 text-end">
                        <button class="btn btn-sewa px-4">Sewa Mobil</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Pajero Sport -->
              <div class="col-10 col-lg-4 mb-5 col-card">
                <div class="card-car p-3">
                  <div class="card-image pt-1">
                    <img
                      src="app/assets/img/mobil/pajero.png"
                      alt=""
                      class="w-100"
                    />
                  </div>
                  <div class="card-title fw-bold my-2 ms-3">
                    <h6 class="fw-bold">Pajero (2017)</h6>
                    <p>Rp. 1.000.000/hari</p>
                  </div>
                  <div class="card-features mt-2">
                    <div class="row justify-content-between">
                      <div class="col-3 text-center">
                        <button class="btn mb-2">
                          <i class="bi bi-person-circle fs-4"></i>
                        </button>
                        <p class="text-muted">4 Seats</p>
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
                        <p class="text-muted">Matic</p>
                      </div>
                      <div class="col-3 text-center">
                        <button class="btn mb-2">
                          <i class="bi bi-fuel-pump-fill fs-4"></i>
                        </button>
                        <p class="text-muted">Pertamax</p>
                      </div>
                    </div>
                  </div>
                  <div class="card-btn mt-3">
                    <div class="row">
                      <div class="col-12 col-lg-6"></div>
                      <div class="col-12 col-lg-6 text-end">
                        <button class="btn btn-sewa px-4">Sewa Mobil</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Fortuner -->
              <div class="col-10 col-lg-4 mb-5 col-card">
                <div class="card-car p-3">
                  <div class="card-image pt-1">
                    <img
                      src="app/assets/img/mobil/fortuner.png"
                      alt=""
                      class="w-100"
                    />
                  </div>
                  <div class="card-title fw-bold my-2 ms-3">
                    <h6 class="fw-bold">Fortuner (2017)</h6>
                    <p>Rp. 1.700.000/hari</p>
                  </div>
                  <div class="card-features mt-2">
                    <div class="row justify-content-between">
                      <div class="col-3 text-center">
                        <button class="btn mb-2">
                          <i class="bi bi-person-circle fs-4"></i>
                        </button>
                        <p class="text-muted">4 Seats</p>
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
                        <p class="text-muted">Matic</p>
                      </div>
                      <div class="col-3 text-center">
                        <button class="btn mb-2">
                          <i class="bi bi-fuel-pump-fill fs-4"></i>
                        </button>
                        <p class="text-muted">Pertamax</p>
                      </div>
                    </div>
                  </div>
                  <div class="card-btn mt-3">
                    <div class="row">
                      <div class="col-12 col-lg-6"></div>
                      <div class="col-12 col-lg-6 text-end">
                        <button class="btn btn-sewa px-4">Sewa Mobil</button>
                      </div>
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
    <script src="app/assets/js/index.js"></script>
    <!-- js end -->
  </body>
</html>
