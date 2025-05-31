<?php
namespace App\Http\Controllers;

use App\Models\BukuTamu;
use Illuminate\Http\Request;

class BukuTamuController extends Controller
{
    public function index()
    {
        $tamu = BukuTamu::all();
        return view('buku-tamu.index', compact('tamu'));
    }

    public function create()
    {
        return view('buku-tamu.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'no_hp' => 'required|string|max:15',
            'instansi' => 'nullable|string|max:255',
            'pesan' => 'required|string|max:1000',
        ]);
        BukuTamu::create($validated);
        return redirect()->route('buku-tamu.index')->with('success', 'Pesan telah ditambahkan!');
    }

    // Hapus method edit & update jika tidak ingin fitur edit
    // public function edit($id) { ... }
    // public function update(Request $request, $id) { ... }

    public function destroy($id)
    {
        $tamu = BukuTamu::findOrFail($id);
        $tamu->delete();
        return redirect()->route('buku-tamu.index')->with('success', 'Pesan telah dihapus!');
    }
}