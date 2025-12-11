<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Produk</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<div class="navbar">
    <div><strong>Edit Produk</strong></div>
    <div>
        <a href="/products">Kembali</a>
        <a href="/logout">Logout</a>
    </div>
</div>

<div class="container">
    <h2>✏️ Edit Produk</h2>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama Produk</label>
        <input type="text" name="name" value="{{ $product->name }}" required>

        <label>Harga Produk</label>
        <input type="number" name="price" value="{{ $product->price }}" required>

        <label>Deskripsi</label>
        <textarea name="description" rows="4" required>{{ $product->description }}</textarea>

        <button type="submit">Update Produk</button>
    </form>

    <a href="{{ route('products.index') }}" class="back-btn">← Kembali ke Daftar Produk</a>
</div>

</body>
</html>