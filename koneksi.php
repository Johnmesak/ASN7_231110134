<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "ASN7_Prak_Pemro_Yohanes"; 

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>