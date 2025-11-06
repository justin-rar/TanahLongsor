<?php
$host = "localhost";
$user = "root";         // ganti sesuai username MySQL kamu
$pass = "";             // isi password jika ada
$db   = "tanah_longsor"; // nama database kamu

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
