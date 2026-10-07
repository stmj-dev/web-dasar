<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Stock</title>
</head>
<body>
    <h1>Edit Stock</h1>

    <form action="/stock/{{ $stock->id }}" method="POST">
        @csrf
        @method('PUT')

        <p>
            <label>Nama:</label><br>
            <input type="text" name="name" value="{{ $stock->name }}" required>
        </p>

        <p>
            <label>Jumlah:</label><br>
            <input type="number" name="count" value="{{ $stock->count }}" required>
        </p>

        <p>
            <label>Harga:</label><br>
            <input type="number" name="price" value="{{ $stock->price }}" required>
        </p>

        <p>
            <button type="submit">Update</button>
            <a href="/stock">Kembali</a>
        </p>
    </form>
</body>
</html>
