@extends('layouts.adminlayout')
@section('title', 'Dashboard Prosess')

@section('content')
<div class="container">
    <h1>Daftar Pesanan</h1>

    <!-- Flash Message -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Add New Order Button -->
    <div class="mb-4">
        <a href="{{ route('pesanan.create') }}" class="btn btn-success">Tambah Data</a>
    </div>


   <!-- Table untuk menampilkan pesanan -->
<table class="table">
    <thead>
        <tr>
            <th>ID Pesanan</th>
            <th>No Nota</th>
            <th>Nama Pelanggan</th>
            <th>Berat (Kg)</th>
            <th>Paket Layanan</th>
            <th>Tanggal Masuk</th>
            <th>Estimasi Selesai</th>
            <th>Biaya</th>
            <th>Status Pesanan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($pesanans as $pesanan)
        <tr>
            <td>{{ $pesanan->id_pesanan }}</td> 
            <td>{{ $pesanan->NoNota }}</td>
            <td>{{ $pesanan->pelanggan->Nama_Pelanggan }}</td>
            <td>{{ $pesanan->berat }}</td>
            <td>{{ $pesanan->paket_layanan }}</td>
            <td>{{ $pesanan->tanggal_masuk }}</td>
            <td>{{ $pesanan->estimasi_selesai }}</td>
            <td>{{ $pesanan->biaya }}</td>
            <td>
                <!-- Toggle buttons for status -->
                @if ($pesanan->status_pesanan == 'Proses')
                    <button class="btn btn-primary btn-sm" onclick="updateStatus('{{ $pesanan->id_pesanan }}', 'Selesai')">Proses</button>
                @else
                    <button class="btn btn-success btn-sm" onclick="updateStatus('{{ $pesanan->id_pesanan }}', 'Proses')">Selesai</button>
                @endif
            </td>
            <td>
                <!-- Tombol Edit -->
                <a href="{{ route('pesanan.edit', $pesanan->id_pesanan) }}" class="btn btn-warning btn-sm">Edit</a>
    
                <!-- Tombol Delete -->
                <form action="{{ route('pesanan.destroy', $pesanan->id_pesanan) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus pesanan ini?')">Delete</button>
                </form>
    
                <!-- Tombol Chat WA -->
                <a href="https://wa.me/{{ $pesanan->pelanggan->no_wa }}" target="_blank" class="btn btn-success btn-sm">Chat WA</a>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="8" class="text-center">Belum ada data pesanan.</td>
        </tr>
    @endforelse
    
    </tbody>
</table>

</div>
@endsection