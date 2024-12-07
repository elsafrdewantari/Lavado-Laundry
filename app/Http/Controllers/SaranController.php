<?php
namespace App\Http\Controllers;

use App\Models\Saran;
use Illuminate\Http\Request;

class SaranController extends Controller
{
    public function index()
    {
        $sarans = Saran::all();
        return view('saran.index', compact('sarans'));
    }

    public function show($id)
    {
        $saran = Saran::findOrFail($id);
        return view('saran.show', compact('saran'));
    }

    public function create()
    {
        return view('saran.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'saran' => 'required|string',
        ]);

        Saran::create($request->all());

        return redirect()->route('saran.index')->with('success', 'Saran berhasil ditambahkan');
    }
}
