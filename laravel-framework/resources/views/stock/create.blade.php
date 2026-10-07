<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Stock</title>
</head>
<body>
    <h1>Tambah Stock</h1>

    <form action="/stock" method="POST">
        @csrf

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
            <a href="/stock">Kembali</a>
        </p>
    </form>
</body>
</html>
