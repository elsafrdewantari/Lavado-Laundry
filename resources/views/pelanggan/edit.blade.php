<!DOCTYPE html>
<html>
<head>
    <title>Edit Pelanggan</title>
</head>
<body>
    <h1>Edit Pelanggan</h1>
    <form action="{{ route('pelanggan.update', $pelanggan->id_pelanggan) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="Nama_Pelanggan">Nama Pelanggan:</label>
        <input type="text" name="Nama_Pelanggan" id="Nama_Pelanggan" value="{{ $pelanggan->Nama_Pelanggan }}" required><br>

        <label for="NoHP">No HP:</label>
        <input type="text" name="NoHP" id="NoHP" value="{{ $pelanggan->NoHP }}" required><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
