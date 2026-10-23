
export default function Stock() {

  // Code fetch data

  // Code inject state

  return (
    <>
      <h1>Daftar Stock</h1>
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
          <tr>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>
              <a href="#">Detail</a>
              <a href="#">Edit</a>
              <button type="submit">Hapus</button>
            </td>
          </tr>
        </tbody>
      </table>
    </>
  )
}
