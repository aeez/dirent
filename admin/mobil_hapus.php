<?php
include('../config/functions/functionMobil.php');

$id = $_GET['id_mobil'];

if (hapus($id) > 0) {
    echo "
    <script>
        alert('Data berhasil dihapus!');
        document.location.href = 'mobil_tbl.php';
    </script>
";
} else {
    echo "
    <script>
        alert('Data gagal dihapus!');
        document.location.href = 'mobil_detail.php';
    </script>
";
}
