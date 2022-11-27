<?php
include('../config/functions/functionPemesanan.php');

$id = $_GET['id_pemesanan'];

$detailPemesanan = detail($id);
if (isset($_POST['submit'])) {
    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil diubah!');
                document.location.href = 'pemesanan_tbl.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal dipinjam!');
                document.location.href = 'pemesanan_ubah.php';
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
                        <h1 class="h3 mb-0 text-gray-800">Pemesanan Mobil</h1>
                    </div>

                    <!--Row-->
                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <!-- Simple Tables -->
                            <div class="col-lg">
                                <!-- Form Basic -->
                                <div class="card lg">
                                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Ubah Pemesanan</h6>
                                    </div>
                                    <div class="card-body">
                                        <form action="" method="POST">
                                            <input type="text" name="id_pemesanan" id="id_pemesanan" value="<?= $detailPemesanan['id_pemesanan'] ?>" hidden>
                                            <div class="form-group">
                                                <label for="nama">Nama Pemesan</label>
                                                <input type="text" class="form-control" id="nama" name="nama" placeholder="<?= $detailPemesanan['nama'] ?>" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label for="alamat">Alamat</label>
                                                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="<?= $detailPemesanan['alamat'] ?>" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label for="no_telp">Nomor Telepon</label>
                                                <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="<?= $detailPemesanan['no_telp'] ?>" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label for="nama_mobil">Nama Mobil</label>
                                                <input type="text" class="form-control" id="nama_mobil" name="nama_mobil" placeholder="<?= $detailPemesanan['nama_mobil'] ?>" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label for="harga">Harga Mobil</label>
                                                <input type="text" class="form-control" id="harga" name="harga" placeholder="<?= $detailPemesanan['harga'] ?>" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label for="dari_tanggal">Dari Tanggal</label>
                                                <input type="text" class="form-control" id="dari_tanggal" name="dari_tanggal" placeholder="<?= $detailPemesanan['dari_tanggal'] ?>" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label for="sampai_tanggal">Sampai Tanggal</label>
                                                <input type="text" class="form-control" id="sampai_tanggal" name="sampai_tanggal" placeholder="<?= $detailPemesanan['sampai_tanggal'] ?>" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label for="jumlah_hari">Jumlah Hari</label>
                                                <input type="text" class="form-control" id="jumlah_hari" name="jumlah_hari" placeholder="<?= $detailPemesanan['jumlah_hari'] ?>" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label for="tujuan">Tujuan</label>
                                                <input type="text" class="form-control" id="tujuan" name="tujuan" placeholder="<?= $detailPemesanan['tujuan'] ?>" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label for="link_drive">Link Bukti Persyaratan</label>
                                                <input type="text" class="form-control" id="link_drive" name="link_drive" placeholder="<?= $detailPemesanan['link_drive'] ?>" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label for="status">Status</label>
                                                <select name="status" id="status" class="form-control">
                                                    <option>-- Pilih --</option>
                                                    <option value="2">Dipinjam</option>
                                                    <option value="3">Dikembalikan</option>
                                                </select>
                                            </div>
                                            <input type="hidden" name="created_at" value="<?= $detailpemesanan['created_at']; ?>">


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
