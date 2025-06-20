<?php
include 'koneksi.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tanggal = $_POST['tanggal'];
    $nama = $_POST['nama_pelanggan'];
    $total = $_POST['total_pembeli'];
    $metode = $_POST['metode_pembayaran'];

    $sql = "INSERT INTO transaksi_penjualan (tanggal, nama_pelanggan, total_pembeli, metode_pembayaran)
            VALUES ('$tanggal', '$nama', '$total', '$metode')";
    mysqli_query($conn, $sql);
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head><title>Tambah Transaksi</title></head>
<body>
<h2>Tambah Transaksi Penjualan</h2>
<form method="POST">
    Tanggal: <input type="date" name="tanggal" required><br>
    Nama Pelanggan: <input type="text" name="nama_pelanggan" required><br>
    Total Pembeli: <input type="number" name="total_pembeli" required><br>
    Metode Pembayaran:
    <select name="metode_pembayaran" required>
        <option value="Tunai">Tunai</option>
        <option value="Transfer">Transfer</option>
        <option value="E-Wallet">E-Wallet</option>
    </select><br><br>
    <input type="submit" value="Simpan">
</form>
<br><a href="index.php">Kembali</a>
</body>
</html>