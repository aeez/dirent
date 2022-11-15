<?php
include('../config/conn.php');

if (!isset($_SESSION['login'])) {
    header('location:auth_login.php');
}

if ($_SESSION['level'] == 'customer') {
    header('location:index.php');
}

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
    $result = mysqli_query($conn, "SELECT * FROM customer WHERE id_customer = '$id'");

    $row = mysqli_fetch_assoc($result);

    return $row;
}

function tambah($request)
{
    global $conn;

    $nik = htmlspecialchars($request['nik']);
    $nama_lengkap = htmlspecialchars($request['nama_lengkap']);
    $alamat = htmlspecialchars($request['alamat']);
    $no_telp = htmlspecialchars($request['no_telp']);
    $kota = htmlspecialchars($request['kota']);
    $kode_pos = htmlspecialchars($request['kode_pos']);
    $email = htmlspecialchars($request['email']);
    $password = password_hash($request['password'], PASSWORD_DEFAULT);
    $level = 'customer';

    $query = "INSERT INTO customer VALUES
            ('','$nik','$nama_lengkap','$alamat','$no_telp','$kota','$kode_pos','$email','$password','$level',Now(),Now())";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubah($request)
{
    global $conn;

    $id_customer = $request['id_customer'];
    $nik = htmlspecialchars($request['nik']);
    $nama_lengkap = htmlspecialchars($request['nama_lengkap']);
    $alamat = htmlspecialchars($request['alamat']);
    $no_telp = htmlspecialchars($request['no_telp']);
    $kota = htmlspecialchars($request['kota']);
    $kode_pos = htmlspecialchars($request['kode_pos']);
    $email = htmlspecialchars($request['email']);
    $password = password_hash($request['password'], PASSWORD_DEFAULT);
    $level = 'customer';
    $created_at = $request['created_at'];

    $query = "UPDATE customer SET
            nik = '$nik',
            nama_lengkap = '$nama_lengkap',
            alamat = '$alamat',
            no_telp = '$no_telp',
            kota = '$kota',
            kode_pos = '$kode_pos',
            email = '$email',
            password = '$password',
            level = '$level',
            created_at = '$created_at',
            updated_at = Now()
            WHERE id_customer = $id_customer
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM customer WHERE id_customer = $id");

    return mysqli_affected_rows($conn);
}

function cari($keyword, $awalData, $jumlahDataPerhalaman)
{

    $query = "SELECT * FROM customer Where nama_lengkap LIKE '%$keyword%' OR nik LIKE '%$keyword%' OR email LIKE '%$keyword%' Limit $awalData,$jumlahDataPerhalaman";

    return query($query);
}
