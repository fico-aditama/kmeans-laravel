<!DOCTYPE html>
<html>
<head><title>Register</title></head>
<body>
    <h2>Register Admin</h2>
    <form method="POST" action="/register">
        @csrf
        <input type="text" name="name" placeholder="Nama" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" required><br>
        <select name="role">
            <option value="admin">Admin</option>
            <option value="kepala_desa">Kepala Desa</option>
        </select><br>
        <button type="submit">Register</button>
    </form>
    @if($errors->any())
        <div>{{ $errors->first() }}</div>
    @endif
    <a href="/login">Login</a>
</body>
</html>