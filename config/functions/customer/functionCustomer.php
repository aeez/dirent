<?php
include('./config/conn.php');


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