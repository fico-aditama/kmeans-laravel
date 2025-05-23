@extends('layouts.admin')

@section('title', 'Edit User - BANSOS KMEANS')

@section('content')
<div style="background:#fff; border-radius:12px; box-shadow:0 2px 12px rgba(0,0,0,0.07); padding:32px 40px; max-width:900px; margin:0 auto;">
    <h1 style="font-size:2rem; color:#888fa6; font-weight:400; margin-bottom:18px;">Edit User</h1>
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div style="margin-bottom:18px;">
            <label for="name" style="color:#888fa6; font-size:1rem;">Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" style="padding:7px 12px; border:1px solid #d1d5db; border-radius:6px; font-size:1rem; width:100%;" required>
            @error('name')
                <p style="color:#ef4444; font-size:0.875rem; margin-top:4px;">{{ $message }}</p>
            @enderror
        </div>
        <div style="margin-bottom:18px;">
            <label for="email" style="color:#888fa6; font-size:1rem;">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" style="padding:7px 12px; border:1px solid #d1d5db; border-radius:6px; font-size:1rem; width:100%;" required>
            @error('email')
                <p style="color:#ef4444; font-size:0.875rem; margin-top:4px;">{{ $message }}</p>
            @enderror
        </div>
        <div style="margin-bottom:18px;">
            <label for="username" style="color:#888fa6; font-size:1rem;">Username:</label>
            <input type="text" id="username" name="username" value="{{ old('username', $user->username) }}" style="padding:7px 12px; border:1px solid #d1d5db; border-radius:6px; font-size:1rem; width:100%;" required>
            @error('username')
                <p style="color:#ef4444; font-size:0.875rem; margin-top:4px;">{{ $message }}</p>
            @enderror
        </div>
        <div style="margin-bottom:18px;">
            <label for="password" style="color:#888fa6; font-size:1rem;">Password (kosongkan jika tidak ingin mengubah):</label>
            <input type="password" id="password" name="password" style="padding:7px 12px; border:1px solid #d1d5db; border-radius:6px; font-size:1rem; width:100%;">
            @error('password')
                <p style="color:#ef4444; font-size:0.875rem; margin-top:4px;">{{ $message }}</p>
            @enderror
        </div>
        <div style="margin-bottom:18px;">
            <label for="role" style="color:#888fa6; font-size:1rem;">Role:</label>
            <select id="role" name="role" style="padding:7px 12px; border:1px solid #d1d5db; border-radius:6px; font-size:1rem; width:100%;" required>
                <option value="admin" {{ old('role', $user->role) === 'admin' ? 'selected' : '' }}>ADMIN</option>
                <option value="KEPALA DESA" {{ old('role', $user->role) === 'KEPALA DESA' ? 'selected' : '' }}>KEPALA DESA</option>
            </select>
            @error('role')
                <p style="color:#ef4444; font-size:0.875rem; margin-top:4px;">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" style="background:#22c55e; color:#fff; border:none; border-radius:6px; padding:10px 18px; font-size:1rem; cursor:pointer;">Update</button>
        <a href="{{ route('users.index') }}" style="background:#888fa6; color:#fff; border:none; border-radius:6px; padding:10px 18px; font-size:1rem; text-decoration:none; margin-left:10px; display:inline-block;">Batal</a>
    </form>
</div>
@endsection