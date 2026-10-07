<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Stock</title>
</head>
<body>
    <h1>Detail Stock</h1>

    <p>ID: {{ $stock->id }}</p>
    <p>Nama: {{ $stock->name }}</p>
    <p>Jumlah: {{ $stock->count }}</p>
    <p>Harga: {{ $stock->price }}</p>

    <p>
        <a href="/stock/{{ $stock->id }}/edit">Edit</a> |
        <a href="/stock">Kembali ke Daftar</a>
    </p>

    <form action="/stock/{{ $stock->id }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?');">
        @csrf
        @method('DELETE')
        <button type="submit">Hapus</button>
    </form>
</body>
</html>
