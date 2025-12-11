

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Produk</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<div class="navbar">
    <div><strong>Tambah Produk</strong></div>
    <div>
        <a href="/products">Kembali</a>
        <a href="/logout">Logout</a>
    </div>
</div>

<div class="container">
    <h2>➕ Tambah Produk Baru</h2>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <label>Nama Produk</label>
        <input type="text" name="name" placeholder="Nama Produk" required>

        <label>Harga Produk</label>
        <input type="number" name="price" placeholder="Harga Produk" required>

        <label>Deskripsi</label>
        <textarea name="description" placeholder="Deskripsi Produk" rows="4" required></textarea>

        <button type="submit">Simpan Produk</button>
    </form>

    <div class="mt-4">
    <a href="{{ route('products.index') }}" class="btn btn-link">← Kembali ke Daftar Produk</a>
</div>
</div>

</body>
</html>