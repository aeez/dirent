<?php
include('../config/functions/functionCustomer.php');

$id = $_GET['id_customer'];

$dataCustomer = query("SELECT * FROM customer WHERE id_customer = $id")[0];

if (isset($_POST['submit'])) {

    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil diubah!');
                document.location.href = 'customer_tbl.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal diubah!');
                document.location.href = 'customer_ubah.php';
            </script>
        ";
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
    <?php include('../app/layouts/css.php'); ?>
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <?php include('../app/layouts/sidebar.php'); ?>
        <!-- Sidebar -->

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">

                <!-- TopBar -->
                <?php include('../app/layouts/topbar.php'); ?>
                <!-- Topbar -->

                <!-- Container Fluid-->
                <div class="container-fluid" id="container-wrapper">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Manajemen Customer</h1>
                    </div>

                    <!--Row-->
                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <!-- Simple Tables -->
                            <div class="col-lg">
                                <!-- Form Basic -->
                                <div class="card lg">
                                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Ubah Customer</h6>
                                    </div>
                                    <div class="card-body">
                                        <form action="" method="POST">
                                            <input type="hidden" name="id_customer" value="<?= $dataCustomer['id_customer']; ?>">
                                            <div class="form-group">
                                                <label for="nik">NIK</label>
                                                <input type="number" class="form-control" id="nik" name="nik" value="<?= $dataCustomer['nik']; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="nama_Customer">Nama</label>
                                                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?= $dataCustomer['nama_lengkap']; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="alamat">Alamat</label>
                                                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $dataCustomer['alamat']; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="no_telp">Nomor Telepon</label>
                                                <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?= $dataCustomer['no_telp']; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="kota">Kota</label>
                                                <input type="text" class="form-control" id="kota" name="kota" value="<?= $dataCustomer['kota']; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="kode_pos">Kode Pos</label>
                                                <input type="number" class="form-control" id="kode_pos" name="kode_pos" value="<?= $dataCustomer['kode_pos']; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email" name="email" value="<?= $dataCustomer['email']; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input type="password" class="form-control" id="password" name="password" value="<?= $dataCustomer['password']; ?>" required>
                                            </div>
                                            <input type="hidden" name="created_at" value="<?= $dataCustomer['created_at']; ?>">
                                            <button type="submit" name="submit" class="btn btn-success">Ubah</button>
                                            <a href="customer_detail.php?id_customer=<?= $dataCustomer['id_customer']; ?>" class="btn btn-outline-dark">Kembali</a></td>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Logout -->
                    <?php include('../app/layouts/modalLogout.php'); ?>

                </div>
                <!---Container Fluid-->
            </div>

            <!-- Footer -->
            <?php include('../app/layouts/footer.php'); ?>
            <!-- Footer -->
        </div>
    </div>

    <!-- Scroll to top -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Js -->
    <?php include('../app/layouts/js.php'); ?>
</body>

</html>