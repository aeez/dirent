<?php
include('../config/functions/functionCustomer.php');

$id = $_GET['id_customer'];

if (hapus($id) > 0) {
    echo "
    <script>
        alert('Data berhasil dihapus!');
        document.location.href = 'customer_tbl.php';
    </script>
";
} else {
    echo "
    <script>
        alert('Data gagal dihapus!');
        document.location.href = 'customer_detail.php';
    </script>
";
}
