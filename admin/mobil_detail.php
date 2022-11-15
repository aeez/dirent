<?php
include('../config/functions/functionMobil.php');

$id = $_GET['id_mobil'];

$detailMobil = detail($id);
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
                        <h1 class="h3 mb-0 text-gray-800">Detail Mobil</h1>
                    </div>

                    <!--Row-->
                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <!-- Simple Tables -->
                            <div class="card">
                                <div class="table-responsive mt-4">
                                    <table class="table align-items-center table-flush">
                                        <tbody>
                                            <tr>
                                                <th style="width:250px;">Gambar</th>
                                                <td>: <img src="../app/img/<?= $detailMobil['gambar']; ?>" alt="" width="100" height="100" class="img-thumbnail"></td>
                                            </tr>
                                            <tr>
                                                <th style="width:250px;">Nama Mobil</th>
                                                <td>: <?= $detailMobil['nama_mobil']; ?></td>
                                            </tr>
                                            <tr>
                                                <th style="width:250px;">Tahun Mobil</th>
                                                <td>: <?= $detailMobil['tahun_mobil']; ?></td>
                                            </tr>
                                            <tr>
                                                <th style="width:250px;">Kursi</th>
                                                <td>: <?= $detailMobil['kursi']; ?></td>
                                            </tr>
                                            <tr>
                                                <th style="width:250px;">Transmisi</th>
                                                <td>: <?= $detailMobil['transmisi']; ?></td>
                                            </tr>
                                            <tr>
                                                <th style="width:250px;">Bensin</th>
                                                <td>: <?= $detailMobil['bensin']; ?></td>
                                            </tr>
                                            <tr>
                                                <th style="width:250px;">Stok</th>
                                                <td>: <?= $detailMobil['stok']; ?></td>
                                            </tr>
                                            <tr>
                                                <th style="width:250px;">Harga</th>
                                                <td>: <?= $detailMobil['harga']; ?></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="text-right">
                                                    <a href="mobil_ubah.php?id_mobil=<?= $detailMobil['id_mobil']; ?>" class="btn btn-warning">Ubah</a>
                                                    <a href="mobil_hapus.php?id_mobil=<?= $detailMobil['id_mobil']; ?>" class="btn btn-danger" onclick="return confirm('Yakin?')">Hapus</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer"></div>
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