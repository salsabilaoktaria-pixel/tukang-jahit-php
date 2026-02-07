<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "tukang_jahit";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi database gagal");
}
?>
