<?php
include('../config/functions/functionPemesanan.php');

$id = $_GET['id_pemesanan'];

if (hapus($id) > 0) {
    echo "
    <script>
        alert('Data berhasil dihapus!');
        document.location.href = 'pemesanan_tbl.php';
    </script>
";
} else {
    echo "
    <script>
        alert('Data gagal dihapus!');
        document.location.href = 'pemesanan_detail.php';
    </script>
";
}
