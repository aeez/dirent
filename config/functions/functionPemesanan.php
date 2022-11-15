<?php
include('../config/conn.php');

if (!isset($_SESSION['login'])) {
    header('location:auth_login.php');
}

// if ($_SESSION['level'] == 'customer') {
//     header('location:index.php');
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

function detail($id)
{

    global $conn;
    $result = mysqli_query($conn, "SELECT id_pemesanan,pemesanan.created_at,nama_lengkap,nama,pemesanan.alamat,pemesanan.no_telp,nama_mobil,harga,jumlah_hari,pemesanan.status,dari_tanggal,sampai_tanggal,tujuan,link_drive FROM pemesanan INNER JOIN mobil ON pemesanan.id_mobil = mobil.id_mobil INNER JOIN customer ON pemesanan.id_customer = customer.id_customer Where id_pemesanan = '$id' ");

    $row = mysqli_fetch_assoc($result);

    return $row;
}

// function tambah($request)
// {
//     global $conn;

//     $nik = htmlspecialchars($request['nik']);
//     $nama_lengkap = htmlspecialchars($request['nama_lengkap']);
//     $alamat = htmlspecialchars($request['alamat']);
//     $no_telp = htmlspecialchars($request['no_telp']);
//     $kota = htmlspecialchars($request['kota']);
//     $kode_pos = htmlspecialchars($request['kode_pos']);
//     $email = htmlspecialchars($request['email']);
//     $password = password_hash($request['password'], PASSWORD_DEFAULT);
//     $level = 'customer';

//     $query = "INSERT INTO customer VALUES
//             ('','$nik','$nama_lengkap','$alamat','$no_telp','$kota','$kode_pos','$email','$password','$level',Now(),Now())";

//     mysqli_query($conn, $query);

//     return mysqli_affected_rows($conn);
// }

function ubah($request)
{
    global $conn;

    $status = htmlspecialchars($request['status']);
    $id_pemesanan = htmlspecialchars($request['id_pemesanan']);
    $created_at = $request['created_at'];

    $query = "UPDATE pemesanan SET
            status     ='$status',
            created_at = '$created_at',
            updated_at = Now()
            WHERE id_pemesanan = $id_pemesanan
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM pemesanan WHERE id_pemesanan = $id");

    return mysqli_affected_rows($conn);
}

function cari($keyword, $awalData, $jumlahDataPerhalaman)
{

    $query = "SELECT id_pemesanan,pemesanan.created_at,nama_lengkap,nama,pemesanan.alamat,no_telp,nama_mobil,harga,jumlah_hari,pemesanan.status,dari_tanggal,sampai_tanggal,tujuan,link_drive FROM pemesanan INNER JOIN mobil ON pemesanan.id_mobil = mobil.id_mobil INNER JOIN customer ON pemesanan.id_customer = customer.id_customer Where nama Like '%$keyword%' OR nama_mobil Like '%$keyword%' OR dari_tanggal Like '%$keyword%' OR tujuan Like '%$keyword%' Limit $awalData,$jumlahDataPerhalaman";

    return query($query);
}
