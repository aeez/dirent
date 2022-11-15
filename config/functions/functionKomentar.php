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
    $result = mysqli_query($conn, "SELECT * FROM komentar INNER JOIN customer ON komentar.id_customer = customer.id_customer WHERE id_komentar = '$id'");

    $row = mysqli_fetch_assoc($result);

    return $row;
}

function hapus($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM komentar WHERE id_komentar = $id");

    return mysqli_affected_rows($conn);
}

function cari($keyword, $awalData, $jumlahDataPerhalaman)
{

    $query = "SELECT * FROM komentar INNER JOIN customer ON komentar.id_customer = customer.id_customer Where nama_lengkap Like '%$keyword%' Limit $awalData,$jumlahDataPerhalaman";

    return query($query);
}
