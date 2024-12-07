<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pelanggan</title>
</head>
<body>
    <h1>Tambah Pelanggan</h1>
    <form action="{{ route('pelanggan.store') }}" method="POST">
        @csrf
        <label for="Nama_Pelanggan">Nama Pelanggan:</label>
        <input type="text" name="Nama_Pelanggan" id="Nama_Pelanggan" required><br>

        <label for="NoHP">No HP:</label>
        <input type="text" name="NoHP" id="NoHP" required><br>

        <button type="submit">Tambah</button>
    </form>
</body>
</html>
