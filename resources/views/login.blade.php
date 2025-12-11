<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="form">
        <h2>Login</h2>
        @if($errors->any())
            <p style="color: red;">{{ $errors->first() }}</p>
        @endif
        <form method="POST" action="/login">
            @csrf
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <div style="text-align: center; margin-top: 20px; color: #555;">
    Belum punya akun? <a href="/register" style="color: #4a76e2; text-decoration: none; font-weight: bold;">Daftar disini</a>
    </div>
    </div>
</body>
</html>