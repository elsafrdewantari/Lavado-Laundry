<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesananProsesController extends Controller
{
    // Menampilkan semua pesanan
    public function index()
    {
        // Ambil semua pesanan yang statusnya 'Proses'
        $pesanans = Pesanan::where('status_pesanan', 'Proses')->with('pelanggan')->get();
        return view('pesananproses.index', compact('pesanans'));
    }

    // Menampilkan form untuk menambah pesanan
    public function create()
    {
        return view('pesananproses.create');
    }

    // Menyimpan pesanan baru
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'NoNota' => 'required|string|max:255',
            'pelanggan_id' => 'required|exists:pelanggans,id',
            'berat' => 'required|numeric',
            'paket_layanan' => 'required|string|max:255',
            'tanggal_masuk' => 'required|date',
            'estimasi_selesai' => 'required|date',
            'biaya' => 'required|numeric',
        ]);

        // Menyimpan pesanan baru
        Pesanan::create($request->all());

        return redirect()->route('pesananproses.index')->with('success', 'Pesanan berhasil ditambahkan.');
    }

    // Menampilkan form untuk mengedit pesanan
    public function edit($id)
    {
        // Mencari pesanan berdasarkan id
        $pesanan = Pesanan::findOrFail($id);
        return view('pesanan.edit', compact('pesanan'));
    }

    // Mengupdate pesanan yang sudah ada
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'NoNota' => 'required|string|max:255',
            'pelanggan_id' => 'required|exists:pelanggans,id',
            'berat' => 'required|numeric',
            'paket_layanan' => 'required|string|max:255',
            'tanggal_masuk' => 'required|date',
            'estimasi_selesai' => 'required|date',
            'biaya' => 'required|numeric',
        ]);

        // Mencari pesanan berdasarkan id dan mengupdate
        $pesanan = Pesanan::findOrFail($id);
        $pesanan->update($request->all());

        return redirect()->route('pesanan.index')->with('success', 'Pesanan berhasil diperbarui.');
    }

    // Menghapus pesanan
    public function destroy($id)
    {
        // Mencari pesanan berdasarkan id dan menghapusnya
        $pesanan = Pesanan::findOrFail($id);
        $pesanan->delete();

        return redirect()->route('pesanan.index')->with('success', 'Pesanan berhasil dihapus.');
    }

    // Menampilkan detail pesanan (optional)
    public function show($id)
    {
        // Mencari pesanan berdasarkan id
        $pesanan = Pesanan::findOrFail($id);
        return view('pesanan.show', compact('pesanan'));
    }
}
