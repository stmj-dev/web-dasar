<?php
include 'koneksi.php';

$id = $_GET['id'];
$result = pg_query_params($conn, "SELECT * FROM native_stocks WHERE id = $1", [$id]);
$stock = pg_fetch_assoc($result);

if (!$stock) {
    die("Data tidak ditemukan");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Stock</title>
</head>
<body>
    <h1>Detail Stock</h1>

    <p>ID: <?= htmlspecialchars($stock['id']); ?></p>
    <p>Nama: <?= htmlspecialchars($stock['name']); ?></p>
    <p>Jumlah: <?= htmlspecialchars($stock['count']); ?></p>
    <p>Harga: <?= htmlspecialchars($stock['price']); ?></p>

    <p>
        <a href="edit.php?id=<?= $stock['id']; ?>">Edit</a> |
        <a href="index.php">Kembali ke Daftar</a>
    </p>

    <form action="delete.php?id=<?= $stock['id']; ?>" method="POST" onsubmit="return confirm('Yakin ingin menghapus?');">
        <button type="submit">Hapus</button>
    </form>
</body>
</html>
