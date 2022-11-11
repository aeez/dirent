<?php
include('./config/conn.php');

if (!isset($_SESSION['login'])) {
    header('location:login.php');
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

function tambah($request)
{
    global $conn;

    $id_customer = htmlspecialchars($request['id_customer']);
    $ulasan = htmlspecialchars($request['ulasan']);

    $query = "INSERT INTO komentar VALUES
            ('','$id_customer','$ulasan',Now(),Now())";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

