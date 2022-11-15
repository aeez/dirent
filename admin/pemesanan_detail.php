<?php
include('../config/functions/functionPemesanan.php');

$id = $_GET['id_pemesanan'];

$detailPemesanan = detail($id);
$totalHarga = $detailPemesanan['harga'] * $detailPemesanan['jumlah_hari'];
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
                        <h1 class="h3 mb-0 text-gray-800">Detail Pemesanan</h1>
                    </div>

                    <!--Row-->
                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <!-- Simple Tables -->
                            <div class="card">
                                <div class="table-responsive mt-4">
                                    <a href="pemesanan_tbl.php" class="btn btn-outline-dark ml-3 mb-3">Kembali</a></td>
                                    <table class="table align-items-center table-flush">
                                        <tbody>
                                            <tr>
                                                <th style="width:250px;">Nama User</th>
                                                <td>: <?= $detailPemesanan['nama_lengkap']; ?></td>
                                            </tr>
                                            <tr>
                                                <th style="width:250px;">Atas Nama</th>
                                                <td>: <?= $detailPemesanan['nama']; ?></td>
                                            </tr>
                                            <tr>
                                                <th style="width:250px;">Alamat</th>
                                                <td>: <?= $detailPemesanan['alamat']; ?></td>
                                            </tr>
                                            <tr>
                                                <th style="width:250px;">Nomor Telepon</th>
                                                <td>: <?= $detailPemesanan['no_telp']; ?></td>
                                            </tr>
                                            <tr>
                                                <th style="width:250px;">Nama Mobil</th>
                                                <td>: <?= $detailPemesanan['nama_mobil']; ?></td>
                                            </tr>
                                            <tr>
                                                <th style="width:250px;">Harga Mobil</th>
                                                <td>: Rp. <?= number_format($detailPemesanan['harga'], 0, ".", "."); ?>/hari</td>
                                            </tr>
                                            <tr>
                                                <th style="width:250px;">Dari Tanggal</th>
                                                <td>: <?= $detailPemesanan['dari_tanggal']; ?></td>
                                            </tr>
                                            <tr>
                                                <th style="width:250px;">Sampai Tanggal</th>
                                                <td>: <?= $detailPemesanan['sampai_tanggal']; ?></td>
                                            </tr>
                                            <tr>
                                                <th style="width:250px;">Jumlah Hari</th>
                                                <td>: <?= $detailPemesanan['jumlah_hari']; ?> hari</td>
                                            </tr>
                                            <tr>
                                                <th style="width:250px;">Tujuan</th>
                                                <td>: <?= $detailPemesanan['tujuan']; ?></td>
                                            </tr>
                                            <tr>
                                                <th style="width:250px;">Link Bukti Persyaratan</th>
                                                <td>: <a href="<?= $detailPemesanan['link_drive']; ?>" target="_blank"><?= $detailPemesanan['link_drive']; ?></a></td>
                                            </tr>
                                            <tr>
                                                <th style="width:250px;">Total Harga</th>
                                                <td>: Rp. <?= number_format($totalHarga, 0, ".", "."); ?></td>
                                            </tr>
                                            <tr>
                                              <th style="width:250px;">Status</th>
                                                <?php if ($detailPemesanan['status'] == 'Belum Disetujui') : ?>
                                                    <td>:
                                                        <span class="badge badge-secondary">
                                                            <?= $detailPemesanan['status']; ?>
                                                        </span>
                                                    </td>
                                                <?php endif; ?>
                                                <?php if ($detailPemesanan['status'] == 'Dipinjam') : ?>
                                                    <td>:
                                                        <span class="badge badge-warning">
                                                            <?= $detailPemesanan['status']; ?>
                                                        </span>
                                                    </td>
                                                <?php endif; ?>
                                                <?php if ($detailPemesanan['status'] == 'Dikembalikan') : ?>
                                                    <td>:
                                                        <span class="badge badge-success">
                                                            <?= $detailPemesanan['status']; ?>
                                                        </span>
                                                    </td>
                                                <?php endif; ?>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="text-right"><a href="pemesanan_ubah.php?id_pemesanan=<?= $detailPemesanan['id_pemesanan']; ?>" class="btn btn-warning">Ubah</a> <a href="pemesanan_hapus.php?id_pemesanan=<?= $detailPemesanan['id_pemesanan']; ?>" class="btn btn-danger" onclick="return confirm('Yakin!')">Hapus</a></td>
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