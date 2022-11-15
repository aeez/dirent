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