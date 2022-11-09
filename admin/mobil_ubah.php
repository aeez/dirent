<?php
include('../config/functions/functionMobil.php');

$id = $_GET['id_mobil'];

$dataMobil = query("SELECT * FROM mobil WHERE id_mobil = $id")[0];

if (isset($_POST['submit'])) {

    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil diubah!');
                document.location.href = 'mobil_tbl.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal diubah!');
                document.location.href = 'mobil_ubah.php';
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
                        <h1 class="h3 mb-0 text-gray-800">Manajemen Mobil</h1>
                    </div>

                    <!--Row-->
                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <!-- Simple Tables -->
                            <div class="col-lg">
                                <!-- Form Basic -->
                                <div class="card lg">
                                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Ubah Mobil</h6>
                                    </div>
                                    <div class="card-body">
                                        <form action="" method="POST" enctype="multipart/form-data">
                                            <input type="hidden" name="id_mobil" value="<?= $dataMobil['id_mobil']; ?>">
                                            <input type="hidden" name="gambarLama" value="<?= $dataMobil['gambar']; ?>">
                                            <div class="form-group">
                                                <label for="gambar">Gambar</label>
                                                <input type="file" class="form-control" id="gambar" name="gambar">
                                                <img src="../app/img/<?= $dataMobil['gambar']; ?>" alt="" width="100" height="120" class="img-thumbnail">
                                            </div>
                                            <div class="form-group">
                                                <label for="nama_mobil">Nama Mobil</label>
                                                <input type="text" class="form-control" id="nama_mobil" name="nama_mobil" value="<?= $dataMobil['nama_mobil']; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="tahun_mobil">Tahun Mobil</label>
                                                <input type="text" class="form-control" id="tahun_mobil" name="tahun_mobil" value="<?= $dataMobil['tahun_mobil']; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="kursi">Kursi</label>
                                                <input type="text" class="form-control" id="kursi" name="kursi" value="<?= $dataMobil['kursi']; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="transmisi">Transmisi</label>
                                                <input type="text" class="form-control" id="transmisi" name="transmisi" value="<?= $dataMobil['transmisi']; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="bensin">Bensin</label>
                                                <input type="text" class="form-control" id="bensin" name="bensin" value="<?= $dataMobil['bensin']; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="stok">Stok</label>
                                                <input type="text" class="form-control" id="stok" name="stok" value="<?= $dataMobil['stok']; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="harga">Harga</label>
                                                <input type="text" class="form-control" id="harga" name="harga" value="<?= $dataMobil['harga']; ?>" required>
                                            </div>
                                            <input type="hidden" name="created_at" value="<?= $dataMobil['created_at']; ?>">
                                            <button type="submit" name="submit" class="btn btn-success">Ubah</button>
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