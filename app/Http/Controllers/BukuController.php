<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        

        return view(view: 'buku.index');
    }

    public function create()
    {
        return view(view: 'buku.create');
    }

    public function store(Request $request)
    {
        // 1. validate, memastikan data yang masuk sesuai syarat
        $validated = $request->validate([
            'penulis' => 'required|max:50|string',
            'judul' => 'required|max:100|string',
            'penerbit' => 'required|max:50|string',
            'tanggal_terbit' => 'required|max:50|date',
            'kategori' => 'required|in:fiksi,nonfiksi',
            'isbn' => 'required|max:20|string',
            'harga' => 'required|decimal:2',
        ]);

        // 2. create record baru dari data yang sudah tervalidasi
        Buku::create($validated);

        // 3. redirect ke mana aja, contoh index
        return to_route('buku.index');
    }

    public function edit()
    {
        return view(view: 'buku.edit');
    }

    public function update(Request $request, $id)
    {

    }





































    // public function store(Request $request) {
    //     $validated = $request->validate([
    //         'penulis'        => 'required',
    //         'judul'          => 'required',
    //         'penerbit'       => 'required',
    //         'tanggal_terbit' => 'required|date',
    //         'kategori'       => 'required',
    //         'isbn'           => 'required|unique:bukus,isbn',
    //         'harga'          => 'required|numeric',
    //     ]);

    //     Buku::create($validated);
    //     return redirect()->route('buku.index')->with('success', 'Buku berhasil ditambahkan!');
    // }

    // public function edit($id) {
    //     $buku = Buku::findOrFail($id);
    //     return view('buku.edit', compact('buku'));
    // }

    // public function update(Request $request, $id) {
    //     $buku = Buku::findOrFail($id);

    //     $validated = $request->validate([
    //         'penulis'        => 'required',
    //         'judul'          => 'required',
    //         'penerbit'       => 'required',
    //         'tanggal_terbit' => 'required|date',
    //         'kategori'       => 'required',
    //         'isbn'           => 'required|unique:bukus,isbn,'.$id,
    //         'harga'          => 'required|numeric',
    //     ]);

    //     $buku->update($validated);
    //     return redirect()->route('buku.index')->with('success', 'Buku berhasil diperbarui!');
    // }

    // public function destroy($id) {
    //     Buku::findOrFail($id)->delete();
    //     return redirect()->route('buku.index')->with('success', 'Buku berhasil dihapus!');
    // }
}
