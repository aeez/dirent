<?php
include('./config/conn.php');

// if (!isset($_SESSION['login'])) {
//     header('location:login.php');
// }

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] =  $row;
    }

    return $rows;
}

// function detail($id)
// {

//     global $conn;
//     $result = mysqli_query($conn, "SELECT id_pemesanan,pemesanan.created_at,nama_mobil,nama_lengkap,alamat,pemesanan.dari_tanggal,pemesanan.sampai_tanggal,pemesanan.status,nama_petugas,pemesanan.nik,customer.no_telp,pemesanan.kota_tujuan FROM pemesanan INNER JOIN customer ON pemesanan.nik = customer.nik INNER JOIN mobil ON pemesanan.id_mobil = mobil.id_mobil INNER JOIN petugas ON pemesanan.id_petugas = petugas.id_petugas Where id_pemesanan = '$id' ");

//     $row = mysqli_fetch_assoc($result);

//     return $row;
// }

function tambah($request)
{
    global $conn;

    $id_customer = htmlspecialchars($request['id_customer']);
    $id_mobil = htmlspecialchars($request['id_mobil']);
    $nama = htmlspecialchars($request['nama']);
    $alamat = htmlspecialchars($request['alamat']);
    $no_telp = htmlspecialchars($request['no_telp']);
    $dari_tanggal = htmlspecialchars($request['dari_tanggal']);
    $sampai_tanggal = htmlspecialchars($request['sampai_tanggal']);
    $jumlah_hari = htmlspecialchars($request['jumlah_hari']);
    $tujuan = htmlspecialchars($request['tujuan']);
    $link_drive = htmlspecialchars($request['link_drive']);
    $status = 'Belum Disetujui';

    // if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM customer WHERE nik = '$nik'")) === 0) {
    //     echo "<script>
    //             alert('Customer belum terdaftar!');
    //         </script>";
    //     return false;
    // }

    $query = "INSERT Into pemesanan Values
            ('','$id_customer','$id_mobil','$nama','$alamat','$no_telp','$dari_tanggal','$sampai_tanggal','$jumlah_hari','$tujuan','$link_drive','$status',Now(),Now())";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// function ubah($request)
// {
//     global $conn;
//     $status = htmlspecialchars($request['status']);
//     $id_peminjaman = htmlspecialchars($request['id_peminjaman']);
//     $created_at = $request['created_at'];

//     $query = "UPDATE peminjaman SET
//             status     ='$status',
//             created_at = '$created_at',
//             updated_at = Now()
//             WHERE id_peminjaman = $id_peminjaman
//             ";

//     mysqli_query($conn, $query);

//     return mysqli_affected_rows($conn);
// }

// function hapus($id)
// {
//     global $conn;

//     mysqli_query($conn, "DELETE FROM buku WHERE id_buku = $id");

//     return mysqli_affected_rows($conn);
// }

// function cari($keyword, $awalData, $jumlahDataPerhalaman)
// {

//     $query = "SELECT id_peminjaman,judul,nama_petugas,nama_siswa,peminjaman.status FROM peminjaman INNER JOIN buku ON peminjaman.id_buku = buku.id_buku INNER JOIN siswa ON peminjaman.nis = siswa.nis INNER JOIN petugas ON peminjaman.id_petugas = petugas.id_petugas Where buku.judul LIKE '%$keyword%' OR nama_petugas LIKE '%$keyword%' OR nama_siswa LIKE '%$keyword%' OR peminjaman.status Like '%$keyword%' Limit $awalData,$jumlahDataPerhalaman";
//     return query($query);
// }
