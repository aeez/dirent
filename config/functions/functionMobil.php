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
    $result = mysqli_query($conn, "SELECT * FROM mobil WHERE id_mobil = '$id'");

    $row = mysqli_fetch_assoc($result);

    return $row;
}

function tambah($request)
{
    global $conn;

    $nama_mobil = htmlspecialchars($request['nama_mobil']);
    $tahun_mobil = htmlspecialchars($request['tahun_mobil']);
    $kursi = htmlspecialchars($request['kursi']);
    $transmisi = htmlspecialchars($request['transmisi']);
    $bensin = htmlspecialchars($request['bensin']);
    $stok = htmlspecialchars($request['stok']);
    $harga = htmlspecialchars($request['harga']);

    $gambar = upload();

    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO mobil VALUES
            ('','$gambar',' $nama_mobil','$tahun_mobil','$kursi','$transmisi','$bensin','$stok','$harga',Now(),Now())";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    if ($error === 4) {
        echo "<script>
                alert('Silahkan Upload Gambar!');
            </script>";
        return false;
    }

    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
                alert('Ekstensi gambar harus jpg/jpeg/png');
            </script>";
        return false;
    }


    if ($ukuranFile > 5000000) {
        echo "<script>
                alert('Ukuran file gambar terlalu besar!');
            </script>";
        return false;
    }

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, '../app/img/' . $namaFileBaru);

    return $namaFileBaru;
}

function ubah($request)
{
    global $conn;

    $id_mobil = $request['id_mobil'];
    $nama_mobil = htmlspecialchars($request['nama_mobil']);
    $tahun_mobil = htmlspecialchars($request['tahun_mobil']);
    $kursi = htmlspecialchars($request['kursi']);
    $transmisi = htmlspecialchars($request['transmisi']);
    $bensin = htmlspecialchars($request['bensin']);
    $stok = htmlspecialchars($request['stok']);
    $harga = htmlspecialchars($request['harga']);
    $created_at = $request['created_at'];
    $gambarLama = htmlspecialchars($request['gambarLama']);

    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    $query = "UPDATE mobil SET
            gambar = '$gambar',
            nama_mobil = '$nama_mobil',
            tahun_mobil = '$tahun_mobil',
            kursi = '$kursi',
            transmisi = '$transmisi',
            bensin = '$bensin',
            stok = '$stok',
            harga = '$harga',
            created_at = '$created_at',
            updated_at = Now()
            WHERE id_mobil = $id_mobil
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM mobil WHERE id_mobil = $id");

    return mysqli_affected_rows($conn);
}

function cari($keyword, $awalData, $jumlahDataPerhalaman)
{

    $query = "SELECT * FROM mobil Where nama_mobil LIKE '%$keyword%' OR tahun_mobil LIKE '%$keyword%' Limit $awalData,$jumlahDataPerhalaman";

    return query($query);
}
