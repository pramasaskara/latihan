<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "belajar";
$conn = mysqli_connect($host, $user, $pass, $database);
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>
