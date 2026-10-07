<?php
include 'koneksi.php';

if (($_SERVER['REQUEST_METHOD'] ?? '') === 'POST') {
    $name = $_POST['name'];
    $count = $_POST['count'];
    $price = $_POST['price'];

    pg_query_params($conn, "INSERT INTO native_stocks (name, count, price, created_at, updated_at) VALUES ($1, $2, $3, NOW(), NOW())", [$name, $count, $price]);

    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Stock</title>
</head>
<body>
    <h1>Tambah Stock</h1>

    <form action="create.php" method="POST">
        <p>
            <label>Nama:</label><br>
            <input type="text" name="name" required>
        </p>

        <p>
            <label>Jumlah:</label><br>
            <input type="number" name="count" required>
        </p>

        <p>
            <label>Harga:</label><br>
            <input type="number" name="price" required>
        </p>

        <p>
            <button type="submit">Simpan</button>
            <a href="index.php">Kembali</a>
        </p>
    </form>
</body>
</html>
