<?php
include 'koneksi.php';

$result = pg_query($conn, "SELECT * FROM native_stocks ORDER BY id ASC");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Stock</title>
</head>
<body>
    <h1>Daftar Stock</h1>

    <p>
        <a href="create.php">Tambah Stock</a>
    </p>

    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            while ($stock = pg_fetch_assoc($result)) :
            ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= htmlspecialchars($stock['name']); ?></td>
                    <td><?= htmlspecialchars($stock['count']); ?></td>
                    <td><?= htmlspecialchars($stock['price']); ?></td>
                    <td>
                        <a href="show.php?id=<?= $stock['id']; ?>">Detail</a>
                        <a href="edit.php?id=<?= $stock['id']; ?>">Edit</a>
                        <form action="delete.php?id=<?= $stock['id']; ?>" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus?');">
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endwhile; ?>
            <?php if (pg_num_rows($result) === 0) : ?>
                <tr>
                    <td colspan="5">Belum ada data stock.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
