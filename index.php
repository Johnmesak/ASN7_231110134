<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head><title>Data Transaksi Penjualan</title></head>
<body>
<h2>Data Transaksi Penjualan</h2>
<a href="tambah.php">+ Tambah Transaksi</a><br><br>
<table border="1" cellpadding="8">
    <tr>
        <th>ID Transaksi</th><th>Tanggal</th><th>Nama Pelanggan</th>
        <th>Total Pembeli</th><th>Metode Pembayaran</th><th>Aksi</th>
    </tr>
    <?php
    $query = mysqli_query($conn, "SELECT * FROM transaksi_penjualan");
    while ($row = mysqli_fetch_assoc($query)) {
        echo "<tr>
            <td>{$row['id_transaksi']}</td>
            <td>{$row['tanggal']}</td>
            <td>{$row['nama_pelanggan']}</td>
            <td>{$row['total_pembeli']}</td>
            <td>{$row['metode_pembayaran']}</td>
            <td>
                <a href='edit.php?id={$row['id_transaksi']}'>Edit</a> |
                <a href='hapus.php?id={$row['id_transaksi']}' onclick='return confirm(\"Hapus data?\")'>Hapus</a>
            </td>
        </tr>";
    }
    ?>
</table>
</body>
</html>