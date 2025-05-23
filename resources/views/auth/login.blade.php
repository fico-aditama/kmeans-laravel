<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - BANSOS KMEANS</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <style>
        body { margin: 0; font-family: 'Roboto', Arial, sans-serif; background: #f4f6fa; }
        .login-container { min-height: 100vh; display: flex; align-items: center; justify-content: center; background: #f4f6fa; }
        .login-card { background: #fff; border-radius: 12px; box-shadow: 0 2px 12px rgba(0,0,0,0.07); padding: 40px 32px; width: 350px; text-align: center; }
        .login-card img { width: 100px; margin-bottom: 20px; }
        .login-card h1 { font-size: 1.1rem; font-weight: 500; margin-bottom: 24px; color: #222; letter-spacing: 1px; }
        .login-card form { display: flex; flex-direction: column; gap: 16px; }
        .login-card input[type="text"], .login-card input[type="password"] { padding: 12px; border: 1px solid #d1d5db; border-radius: 6px; font-size: 1rem; }
        .login-card button { padding: 12px; background: #2563eb; color: #fff; border: none; border-radius: 6px; font-size: 1rem; cursor: pointer; transition: background 0.2s; }
        .login-card button:hover { background: #1d4ed8; }
    </style>
</head>
<body>
<div class="login-container">
    <div class="login-card">
        <img src="/images/tabalong.png" alt="Tabalong Logo" onerror="this.onerror=null;this.src='https://upload.wikimedia.org/wikipedia/commons/6/65/Lambang_Kabupaten_Tabalong.png';">
        <h1>PENGELOMPOKKAN PENERIMA BANTUAN SOSIAL BERAS UNTUK MASYARAKAT MISKIN DI DESA BURUM KABUPATEN TABALONG MENGGUNAKAN METODE K-MEANS</h1>
        <form method="POST" action="/login">
            @csrf
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        @if($errors->any())
            <div>{{ $errors->first() }}</div>
        @endif
    <a href="/register">Register</a>
    </div>
</div>
</body>
</html> 