<!DOCTYPE html>
<html>
<head>
    <title>Form Admin</title>
</head>
<body>
    <h1>Form Admin</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('admin.store') }}" method="POST">
        @csrf
        <label>Nama:</label>
        <input type="text" name="nama" value="{{ old('nama') }}"><br>

        <label>Email:</label>
        <input type="email" name="email" value="{{ old('email') }}"><br>

        <label>No. HP:</label>
        <input type="text" name="no_hp" value="{{ old('no_hp') }}"><br>

        <label>Alamat:</label>
        <textarea name="alamat">{{ old('alamat') }}</textarea><br>

        <label>Role:</label>
        <select name="role">
            <option value="">--Pilih Role--</option>
            <option value="Super Admin" {{ old('role') == 'Super Admin' ? 'selected' : '' }}>Super Admin</option>
            <option value="Kasir" {{ old('role') == 'Kasir' ? 'selected' : '' }}>Kasir</option>
        </select><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
