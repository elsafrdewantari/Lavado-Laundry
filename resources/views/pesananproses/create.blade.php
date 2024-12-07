@extends('layouts.app')

@section('title', 'Tambah Pesanan')

@section('content')
<div class="container">
    <h1>Tambah Pesanan</h1>

    <form action="{{ route('pesanan.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="id_pesanan" class="form-label">ID Pesanan</label>
            <input type="text" class="form-control" id="id_pesanan" name="id_pesanan" value="{{ old('id_pesanan', $nextId) }}" readonly>
        </div>
        
        <div class="mb-3">
            <label for="NoNota" class="form-label">No Nota</label>
            <input type="text" class="form-control" id="NoNota" name="NoNota" value="{{ $noNota }}" readonly required>
        </div>
        <div class="mb-3">
            <label for="id_pelanggan" class="form-label">Pilih Pelanggan</label>
            <select class="form-select" id="id_pelanggan" name="id_pelanggan" required>
                <option value="">-- Pilih Pelanggan --</option>
                @foreach ($pelanggan as $key => $value)
                    <option data-id="{{ $value->id_pelanggan }}" data-nama="{{ $value->Nama_Pelanggan }}" value="{{ $value->id_pelanggan }}">
                        {{ $value->Nama_Pelanggan }} (ID: {{ $value->id_pelanggan }})
                    </option>
                @endforeach
            </select>
        </div>
        
        
        
        
        
        
        
        
        <div class="mb-3">
            <label for="berat" class="form-label">Berat (Kg)</label>
            <input type="number" class="form-control" id="berat" name="berat" min="1" required>
        </div>
        <div class="mb-3">
            <label for="paket_layanan" class="form-label">Paket Layanan</label>
            <select class="form-select" id="paket_layanan" name="paket_layanan" required>
                <option value="">Pilih Paket Layanan</option>
                <option value="setrika">Setrika</option>
                <option value="express">Express</option>
                <option value="one_day">One Day</option>
                <option value="regular">Regular</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="tanggal_masuk" class="form-label">Tanggal Masuk</label>
            <input type="date" class="form-control" id="tanggal_masuk" name="tanggal_masuk" required>
        </div>
        <div class="mb-3">
            <label for="status_pesanan" class="form-label">Status Pesanan</label>
            <input type="text" class="form-control" id="status_pesanan" name="status_pesanan" value="Proses" readonly required>
        </div>
        

        <button type="submit" class="btn btn-primary">Simpan Pesanan</button>
        <a href="{{ route('pesanan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
