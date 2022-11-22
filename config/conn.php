<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
<<<<<<< HEAD
$database = "dirent";
=======
$database = "dirent1";
>>>>>>> 38b9089059206efc66d748abc38fbd2ec233ab4f

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
