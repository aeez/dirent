<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <?php include('./app/layouts/font.php');?>
    <link rel="stylesheet" href="./app/assets/css/bootstrap/css/bootstrap.min.css">
    <!-- css -->
    <link rel="stylesheet" href="./app/assets/css/style.css" />
    <link rel="stylesheet" href="./app/assets/css/register.css" />
  </head>
  <body>
<?php include ('./navbar.php'); ?>
    <!-- main start -->
    <main>
      <section id="register">
        <div id="wrapper" class="container py-5">
          <div class="row justify-content-center mx-1 mt-5 m-lg-5">
            <div class="col-12 col-lg-8 form-wrapper p-4 rounded">
              <div class="section-title text-center">
                <h1 class="fst-italic">DIRENT</h1>
              </div>
              <form action="" class="mt-4">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="personal mt-4">
                      <h5 class="mb-3">INFORMASI DIRI</h5>
                      <div class="mb-3">
                        <label for="nik" class="form-label">NIK</label>
                        <input
                          type="number"
                          class="form-control"
                          id="nik"
                          placeholder="NIK"
                          required
                        />
                      </div>
                      <div class="mb-3">
                        <label for="nama" class="form-label"
                          >Nama Lengkap</label
                        >
                        <input
                          type="text"
                          class="form-control"
                          id="nama"
                          placeholder="Nama Lengkap"
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
                        <div class="row">
                          <div class="col-6">
                            <label for="kota" class="form-label">Kota</label>
                            <input
                              type="text"
                              class="form-control"
                              id="kota"
                              placeholder="Kota"
                              required
                            />
                          </div>
                          <div class="col-6">
                            <label for="kodepos" class="form-label"
                              >Kode Pos</label
                            >
                            <input
                              type="number"
                              class="form-control"
                              id="kodepos"
                              placeholder="Kode Pos"
                              required
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="registrasi mt-4">
                      <h5 class="mb-3">REGISTERASI</h5>
                      <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input
                          type="email"
                          class="form-control"
                          id="email"
                          placeholder="Email"
                          required
                        />
                      </div>
                      <div class="mb-3">
                        <label for="username" class="form-label"
                          >Username</label
                        >
                        <input
                          type="text"
                          class="form-control"
                          id="username"
                          placeholder="Username"
                          required
                        />
                      </div>
                      <div class="mb-3">
                        <label for="password" class="form-label"
                          >Password</label
                        >
                        <input
                          type="password"
                          class="form-control"
                          id="password"
                          placeholder="Password"
                          required
                        />
                      </div>
                      <div class="mb-2">
                        <label for="confirm_password" class="form-label"
                          >Confirm Password</label
                        >
                        <input
                          type="password"
                          class="form-control"
                          id="confirm_password"
                          placeholder="Confirm Password"
                          required
                        />
                      </div>
                      <div>
                        <div class="row switchlogin">
                          <div class="col-12">
                            <p class="text-muted">
                              Already have an account? Click here to
                              <span> <a href="#">Login</a></span>
                            </p>
                          </div>
                          <div class="col-12">
                            <button class="btn px-4">Buat Akun</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!-- main end -->

<?php include ('./footer.php'); ?>
    <!-- js start -->
    <script src="app/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="app/assets/js/app.js"></script>
    <!-- js end -->
  </body>
</html>
