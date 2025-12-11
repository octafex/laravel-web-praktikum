<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Stok</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<div class="navbar">
    <div><strong>Tambah Stok</strong></div>
    <div>
        <a href="/dashboard">Home</a>
        <a href="/stok">Kembali</a>
        <a href="/logout">Logout</a>
    </div>
</div>

<div class="container">
    <h2>➕ Tambah Stok Baru</h2>

    <form action="{{ route('stok.store') }}" method="POST">
        @csrf

        <label>Produk</label>
        <select name="product_id" required>
            <option value="">Pilih Produk</option>
            @foreach($products as $p)
                <option value="{{ $p->id }}">{{ $p->name }}</option>
            @endforeach
        </select>

        <label>Toko</label>
        <select name="toko_id" required>
            <option value="">Pilih Toko</option>
            @foreach($tokos as $t)
                <option value="{{ $t->id }}">{{ $t->nama_toko }}</option>
            @endforeach
        </select>

        <label>Jumlah Stok</label>
        <input type="number" name="jumlah" min="0" required>

        <button type="submit">Simpan Stok</button>
    </form>

    <a href="{{ route('stok.index') }}" class="back-btn">← Kembali ke Daftar Stok</a>
</div>

</body>
</html>