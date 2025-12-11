<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Toko</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<div class="navbar">
    <div><strong>Tambah Toko</strong></div>
    <div>
        <a href="/dashboard">Home</a>
        <a href="/toko">Kembali</a>  <!-- route: /tokos -->
        <form action="/logout" method="POST" style="display:inline;">
            @csrf
            <button type="submit" style="background:none; border:none; color:white; text-decoration:underline; font-weight:bold; cursor:pointer;">Logout</button>
        </form>
    </div>
</div>

<div class="container">
    <h2>➕ Tambah Toko Baru</h2>

    <form action="{{ route('toko.store') }}" method="POST">  <!-- route: tokos.store -->
        @csrf
        <label>Nama Toko</label>
        <input type="text" name="nama_toko" required>

        <label>Alamat</label>
        <input type="text" name="alamat" required>

        <button type="submit">Simpan Toko</button>
    </form>

    <a href="{{ route('toko.index') }}" class="back-btn">← Kembali ke Daftar Toko</a> <!-- route: tokos.index -->
</div>

</body>
</html>