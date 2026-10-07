<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Stock</title>
</head>
<body>
    <h1>Daftar Stock</h1>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <p>
        <a href="/stock/create">Tambah Stock</a>
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
            @forelse ($stocks as $stock)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $stock->name }}</td>
                    <td>{{ $stock->count }}</td>
                    <td>{{ $stock->price }}</td>
                    <td>
                        <a href="/stock/{{ $stock->id }}">Detail</a>
                        <a href="/stock/{{ $stock->id }}/edit">Edit</a>
                        <form action="/stock/{{ $stock->id }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Belum ada data stock.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
