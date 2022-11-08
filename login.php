<?php
include('./config/functions/user/functionAuth.php');

if (isset($_SESSION['login']) && (isset($_SESSION['level']) == 'siswa')) {
    header('location:index.php');
}

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    // $petugasInfo = mysqli_query($conn, "SELECT * FROM petugas WHERE username = '$username'");
    $siswaInfo = mysqli_query($conn, "SELECT * FROM siswa WHERE username = '$username'");

    if (mysqli_num_rows($siswaInfo) === 0) {
        $error4 = true;
    } //else if (mysqli_num_rows($siswaInfo) === 0) {
        //$error4 = true;
    //}

    if (mysqli_num_rows($siswaInfo) === 1) {

        $row = mysqli_fetch_assoc($siswaInfo);

        if (password_verify($password, $row['password'])) {
            // session set
            $_SESSION['login'] = true;
            $_SESSION['nama'] = $row['nama_siswa'];
            $_SESSION['level'] = $row['level'];
            header('location: index.php');
            exit;
        }

        $error = true;
    } //else if (mysqli_num_rows($siswaInfo) === 1) {

    //     $row = mysqli_fetch_assoc($siswaInfo);

    //     if (password_verify($password, $row['password'])) {
    //         // sessin set
    //         $_SESSION['login'] = true;
    //         $_SESSION['nama'] = $row['nama_siswa'];
    //         $_SESSION['level'] = $row['level'];
    //         header('location: home.php');
    //         exit;
    //     }

    //     $error = true;
    // }
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>
    <?php include('./app/layouts/font.php');?>
    <link rel="stylesheet" href="./app/assets/css/bootstrap/css/bootstrap.min.css">
    <!-- css -->
    <link rel="stylesheet" href="./app/assets/css/footer2.css" />
    <link rel="stylesheet" href="./app/assets/css/newlogin.css" />
    <!-- <link rel="stylesheet" href="./app/assets/css/login.css" /> -->
  </head>
  <body>
<?php include ('./navbar.php'); ?>
    <!-- main start -->
    <main>
        <section class="container-fluid form-page">
            <div class="row justify-content-center align-items-center" style="height: 100vh">
                <div class="col-10 col-lg-4 p-3 form-wrapper">
                    <div class="form-logo text-center my-5">
                        <h1 class="fw-bold fst-italic">DIRENT</h1>
                    </div>
                    
                    <?php if (isset($error)) { ?>
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            Gagal, mohon periksa lagi username dan password Anda!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php } else if (isset($error4)) { ?>
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            Gagal, Anda belum terdaftar!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php }  ?>
                    <div class="form-main">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <input
                                    type="text"
                                    class="form-control"
                                    name="username"
                                    id="username"
                                    placeholder="Username"
                                    required
                                />
                            </div>
                            <div class="mb-4">
                                <input
                                    type="password"
                                    class="form-control"
                                    name="password"
                                    id="password"
                                    placeholder="Password"
                                    required
                                />
                            </div>
                            <div class="register-wrapper text-center">
                                <p>Dont have an account ? <a href="register.php">Sign Up</a></p>
                            </div>
                            <div class="form-button mb-5">
                                <button type="submit" name="login">Log In</button>
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
    <script src="app/assets/js/index.js"></script>
    <?php include('./app/layouts/js.php'); ?>
    <!-- js end -->
  </body>
</html>
