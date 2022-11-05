<?php
include('../config/functions/functionAuth.php');

if (isset($_SESSION['login']) && (isset($_SESSION['level']) == 'admin') || (isset($_SESSION['level']) == 'petugas')) {
    header('location: dashboard.php');
} else if (isset($_SESSION['login']) && (isset($_SESSION['level']) == 'siswa')) {
    header('location:home.php');
}

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $petugasInfo = mysqli_query($conn, "SELECT * FROM petugas WHERE username = '$username'");
    $siswaInfo = mysqli_query($conn, "SELECT * FROM siswa WHERE username = '$username'");

    if (mysqli_num_rows($petugasInfo) === 0) {
        $error4 = true;
    } else if (mysqli_num_rows($siswaInfo) === 0) {
        $error4 = true;
    }

    if (mysqli_num_rows($petugasInfo) === 1) {

        $row = mysqli_fetch_assoc($petugasInfo);

        if (password_verify($password, $row['password'])) {
            // sessin set
            $_SESSION['login'] = true;
            $_SESSION['nama'] = $row['nama_petugas'];
            $_SESSION['level'] = $row['level'];
            header('location: dashboard.php');
            exit;
        }

        $error = true;
    } else if (mysqli_num_rows($siswaInfo) === 1) {

        $row = mysqli_fetch_assoc($siswaInfo);

        if (password_verify($password, $row['password'])) {
            // sessin set
            $_SESSION['login'] = true;
            $_SESSION['nama'] = $row['nama_siswa'];
            $_SESSION['level'] = $row['level'];
            header('location: home.php');
            exit;
        }

        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>DIRENT</title>
    <link href="../app/assets/css/login.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;1,300;1,600&family=Rubik:ital,wght@0,300;0,500;0,600;0,800;1,300;1,700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body id="top">

    <!-- form -->
    <section class="container-fluid form-page">
        <div
        class="row justify-content-center align-items-center"
        style="height: 100vh">
            <div class="col-10 col-lg-4 p-3 form-wrapper">
            <div class="form-logo text-center my-5">
                <h1 class="fw-bold fst-italic"><i class="bi bi-x-lg"></i> DIRENT</h1>
                <?php if (isset($error)) { ?>
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        Gagal, mohon periksa lagi username dan password Anda!
                    </div>
                <?php } else if (isset($error4)) { ?>
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        Gagal, Anda belum terdaftar!
                    </div>
                <?php }  ?>
            </div>
            <div class="form-main">
                <form action="" method="POST">
                <div class="mb-3">
                <input
                    type="text"
                    class="form-control"
                    name="username"
                    id="username"
                    placeholder="username"
                    required
                />
                </div>
                <div class="mb-4">
                <input
                    type="password"
                    class="form-control"
                    name="password"
                    id="password"
                    placeholder="password"
                    required
                />
                </div>
                <div class="form-button mb-5">
                <button type="submit" name="login">Sign In</button>
                </div>
                </form>
            </div>
            </div>
      </div>
    </section>
    <!-- form -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <?php include('../app/layouts/js.php'); ?>
</body>

</html>