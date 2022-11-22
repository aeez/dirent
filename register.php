<?php

include('./config/functions/customer/functionCustomer.php');

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Register DIRENT</title>
    <?php include('./app/layouts/font.php');?>
    <link rel="stylesheet" href="./app/assets/css/bootstrap/css/bootstrap.min.css">
    <link rel="shortcut icon" href="app/assets/img/logodirent.png" type="image/x-icon">
    <!-- css -->
    <link rel="stylesheet" href="./app/assets/css/footer2.css" />
    <link rel="stylesheet" href="./app/assets/css/register.css" />
  </head>
  <body>
<?php include ('./navbar.php'); ?>
    <!-- main start -->
    <main>
      <section id="register">
        <div id="wrapper" class="container py-5">
          <div class="row justify-content-center mx-1 mt-5 m-lg-5">
            <div class="col-12 col-lg-11 form-wrapper p-4 rounded">
              <div class="section-title text-center">
                <h1 class="fst-italic fw-bold">DIRENT</h1>
              </div>
              <form action="" method="POST" class="mt-4">
                <div class="row justify-content-around">
                  <div class="col-lg-6">
                    <div class="personal mt-4 me-lg-5">
                      <h5 class="mb-3">INFORMASI DIRI</h5>
                      <div class="mb-3">
                        <label for="nama_lengkap" class="form-label"
                          >Nama Lengkap</label
                        >
                        <input
                          type="text"
                          class="form-control"
                          id="nama"
                          name="nama_lengkap"
                          placeholder="Nama Lengkap"
                          required
                        />
                      </div>
                      <div class="mb-3">
                        <label for="nik" class="form-label">NIK</label>
                        <input
                          type="number"
                          class="form-control"
                          id="nik"
                          name="nik"
                          placeholder="NIK"
                          required
                        />
                      </div>
                      <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input
                          type="text"
                          class="form-control"
                          id="alamat"
                          name="alamat"
                          placeholder="Alamat"
                          required
                        />
                      </div>
                      <div class="mb-3">
                        <label for="no_telp" class="form-label"
                          >Nomor Telepon</label
                        >
                        <input
                          type="number"
                          class="form-control"
                          id="no_telp"
                          name="no_telp"
                          placeholder="Nomor Telepon"
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
                              name="kota"
                              placeholder="Kota"
                              required
                            />
                          </div>
                          <div class="col-6">
                            <label for="kode_pos" class="form-label"
                              >Kode Pos</label
                            >
                            <input
                              type="number"
                              class="form-control"
                              id="kode_pos"
                              name="kode_pos"
                              placeholder="Kode Pos"
                              required
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="registrasi mt-4 ms-lg-4">
                      <h5 class="mb-3">REGISTRASI</h5>
                      <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input
                          type="email"
                          class="form-control"
                          id="email"
                          name="email"
                          placeholder="Email"
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
                          name="password"
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
                        <div class="row switchlogin mt-lg-5">
                          <div class="col-12 mt-lg-5">
                            <p class="text-muted">
                              Already have an account? Click here to
                              <span> <a href="login.php">Login</a></span>
                            </p>
                          </div>
                          <div class="col-12">
                            <button type="submit" name="submit" class="btn px-4">Buat Akun</button>
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
    <script src="app/assets/css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="app/assets/js/index.js"></script>
    <!-- <script src="app/assets/js/swiper.js"></script> -->
    <!-- js end -->

    <?php

        if (isset($_POST['submit'])) {

        if (tambah($_POST) > 0) {
            echo "
                <script>
                    Swal.fire(
                      'Sukses!',
                      'Anda telah berhasil melakukan registrasi',
                      'success'
                    ).then(()=> {
                        document.location.href = 'index.php'});
                </script>
            ";
        } else {
            echo "
                <script>
                    Swal.fire({
                    icon: 'error',
                    title: 'Anda belum Login!',
                    text: 'Silahkan login terlebih dahulu',
                  }).then(()=> {
                    document.location.href = 'index.php'})
                </script>
            ";
        }
    }

    ?>

  </body>
</html>
