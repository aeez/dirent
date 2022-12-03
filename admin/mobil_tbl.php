<?php
include('../config/functions/functionMobil.php');
$mobil = query("SELECT * FROM mobil");
$awalData = 0;
$jumlahDataPerhalaman = 5;
$jumlahData = count(query("SELECT * FROM mobil"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerhalaman);
$halamanAktif = (isset($_GET['halaman']) ? $_GET['halaman'] : 1);

$awalData = ($jumlahDataPerhalaman * $halamanAktif) - $jumlahDataPerhalaman;
$mobil = query("SELECT * FROM mobil Limit $awalData,$jumlahDataPerhalaman");

if (isset($_GET['cari'])) {
    $keyword = $_GET["keyword"];
    $jumlahData = count(query("SELECT * FROM mobil Where nama_mobil LIKE '%$keyword%' OR tahun_mobil LIKE '%$keyword%'"));
    $jumlahHalaman = ceil($jumlahData / $jumlahDataPerhalaman);
    $halamanAktif = (isset($_GET['halaman']) ? $_GET['halaman'] : 1);
    $awalData = ($jumlahDataPerhalaman * $halamanAktif) - $jumlahDataPerhalaman;
    $mobil = cari($_GET["keyword"], $awalData, $jumlahDataPerhalaman);
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
                            <div class="card">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <a href="./mobil_tambah.php" class="btn btn-sm btn-primary">Tambah Mobil</a>
                                    <form action="" method="GET">
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-sm" placeholder="Cari" name="keyword" id="keyword">
                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-primary" name="cari"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush text-center">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>No</th>
                                                <th>Gambar</th>
                                                <th>Nama Mobil</th>
                                                <th>Tahun Mobil</th>
                                                <th>Stok</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            <?php foreach ($mobil as $dataMobil) : ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><img src="../app/img/<?= $dataMobil['gambar']; ?>" alt="" width="100" height="100" class="img-thumbnail"></td>
                                                    <td><?= $dataMobil['nama_mobil']; ?></td>
                                                    <td><?= $dataMobil['tahun_mobil']; ?></td>
                                                    <td><?= $dataMobil['stok']; ?></td>
                                                    <td><a href="mobil_detail.php?id_mobil=<?= $dataMobil['id_mobil']; ?>" class="btn btn-sm btn-info">Detail</a></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <hr>
                                <div class="card-footer text-right">
                                    <nav class="d-inline-block">
                                        <ul class="pagination mb-0">
                                            <?php if (isset($_GET['cari'])) { ?>
                                                <?php if ($halamanAktif > 1) : ?>
                                                    <a class="page-link" href="?halaman=<?= $halamanAktif - 1; ?>&keyword=<?php echo $_GET['keyword'] ?>" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                                                <?php endif; ?>
                                                <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
                                                    <?php if ($i == $halamanAktif) : ?>
                                                        <li class="page-item active">
                                                            <a class="page-link" href="?halaman=<?= $i; ?>&keyword=<?php echo $_GET['keyword'] ?>&cari="><?= $i; ?></a>
                                                        </li>
                                                    <?php else : ?>
                                                        <li class="page-item">
                                                            <a class="page-link" href="?halaman=<?= $i; ?>&keyword=<?php echo $_GET['keyword'] ?>&cari="><?= $i; ?></a>
                                                        </li>
                                                    <?php endif; ?>
                                                <?php endfor; ?>
                                                <?php if ($halamanAktif < $jumlahHalaman) : ?>
                                                    <a class="page-link" href="?halaman=<?= $halamanAktif + 1; ?>&keyword=<?php echo $_GET['keyword'] ?>&cari="><i class="fas fa-chevron-right"></i></a>
                                                <?php endif; ?>

                                            <?php } else { ?>

                                                <?php if ($halamanAktif > 1) : ?>
                                                    <a class="page-link" href="?halaman=<?= $halamanAktif - 1; ?>" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                                                <?php endif; ?>
                                                <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
                                                    <?php if ($i == $halamanAktif) : ?>
                                                        <li class="page-item active">
                                                            <a class="page-link" href="?halaman=<?= $i; ?>"><?= $i; ?></a>
                                                        </li>
                                                    <?php else : ?>
                                                        <li class="page-item">
                                                            <a class="page-link" href="?halaman=<?= $i; ?>"><?= $i; ?></a>
                                                        </li>
                                                    <?php endif; ?>
                                                <?php endfor; ?>
                                                <?php if ($halamanAktif < $jumlahHalaman) : ?>
                                                    <a class="page-link" href="?halaman=<?= $halamanAktif + 1 ?>"><i class="fas fa-chevron-right"></i></a>
                                                <?php endif; ?>
                                            <?php } ?>

                                        </ul>
                                    </nav>
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