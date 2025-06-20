<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM transaksi_penjualan WHERE id_transaksi = $id"));

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tanggal = $_POST['tanggal'];
    $nama = $_POST['nama_pelanggan'];
    $total = $_POST['total_pembeli'];
    $metode = $_POST['metode_pembayaran'];

    $update = "UPDATE transaksi_penjualan SET 
        tanggal='$tanggal', nama_pelanggan='$nama',
        total_pembeli='$total', metode_pembayaran='$metode'
        WHERE id_transaksi=$id";
    mysqli_query($conn, $update);
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head><title>Edit Transaksi</title></head>
<body>
<h2>Edit Transaksi Penjualan</h2>
<form method="POST">
    Tanggal: <input type="date" name="tanggal" value="<?= $data['tanggal'] ?>" required><br>
    Nama Pelanggan: <input type="text" name="nama_pelanggan" value="<?= $data['nama_pelanggan'] ?>" required><br>
    Total Pembeli: <input type="number" name="total_pembeli" value="<?= $data['total_pembeli'] ?>" required><br>
    Metode Pembayaran:
    <select name="metode_pembayaran" required>
        <option value="Tunai" <?= $data['metode_pembayaran'] == 'Tunai' ? 'selected' : '' ?>>Tunai</option>
        <option value="Transfer" <?= $data['metode_pembayaran'] == 'Transfer' ? 'selected' : '' ?>>Transfer</option>
        <option value="E-Wallet" <?= $data['metode_pembayaran'] == 'E-Wallet' ? 'selected' : '' ?>>E-Wallet</option>
    </select><br><br>
    <input type="submit" value="Update">
</form>
<br><a href="index.php">Kembali</a>
</body>
</html>