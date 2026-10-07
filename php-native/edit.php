<?php
include 'koneksi.php';

$id = $_GET['id'];

if (($_SERVER['REQUEST_METHOD'] ?? '') === 'POST') {
    $name = $_POST['name'];
    $count = $_POST['count'];
    $price = $_POST['price'];

    pg_query_params($conn, "UPDATE native_stocks SET name = $1, count = $2, price = $3, updated_at = NOW() WHERE id = $4", [$name, $count, $price, $id]);

    header('Location: index.php');
    exit;
}

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
    <title>Edit Stock</title>
</head>
<body>
    <h1>Edit Stock</h1>

    <form action="edit.php?id=<?= $stock['id']; ?>" method="POST">
        <p>
            <label>Nama:</label><br>
            <input type="text" name="name" value="<?= htmlspecialchars($stock['name']); ?>" required>
        </p>

        <p>
            <label>Jumlah:</label><br>
            <input type="number" name="count" value="<?= htmlspecialchars($stock['count']); ?>" required>
        </p>

        <p>
            <label>Harga:</label><br>
            <input type="number" name="price" value="<?= htmlspecialchars($stock['price']); ?>" required>
        </p>

        <p>
            <button type="submit">Update</button>
            <a href="index.php">Kembali</a>
        </p>
    </form>
</body>
</html>
