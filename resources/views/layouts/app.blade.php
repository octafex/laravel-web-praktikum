<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar">
    <a href="/dashboard" class="logo">OctaFlex</a>
    <div class="nav-links">
        <a href="/products" class="btn btn-link">Produk</a>
        <a href="/toko" class="btn btn-link">Toko</a>
        <a href="/stok" class="btn btn-link">Stok</a>
        <form action="/logout" method="POST" class="inline">
            @csrf
            <button type="submit" class="btn btn-red">Logout</button>
        </form>
    </div>
</nav>

<!-- CONTENT -->
<main class="container">
    <div class="page-header">
        <h2>@yield('page-title', 'Dashboard')</h2>
    </div>
    <div class="content">
        @yield('content')
    </div>
</main>

<!-- FOOTER -->
<footer class="footer">
    &copy; {{ date('Y') }} - Web App Laravel
</footer>

</body>
</html>