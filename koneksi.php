<?php
// Koneksi Database - Start
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_prakweb2";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
// Koneksi Database - End
