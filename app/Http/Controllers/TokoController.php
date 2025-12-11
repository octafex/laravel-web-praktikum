<?php

namespace App\Http\Controllers;

use App\Models\Toko;
use Illuminate\Http\Request;

class TokoController extends Controller
{
    public function index()
    {
        $toko = Toko::all();
        return view('toko.index', compact('toko'));
    }

    public function create()
    {
        return view('toko.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_toko' => 'required|string|max:255',
            'alamat' => 'required|string',
        ]);

        Toko::create($request->only(['nama_toko', 'alamat']));

        return redirect('/toko')->with('success', 'Toko berhasil ditambahkan!');
    }

    public function show($id)
    {
        $toko = Toko::findOrFail($id);
        return view('toko.show', compact('toko'));
    }

    public function edit($id)
    {
        $toko = Toko::findOrFail($id);
        return view('toko.edit', compact('toko'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_toko' => 'required|string|max:255',
            'alamat' => 'required|string',
        ]);

        $toko = Toko::findOrFail($id);
        $toko->update($request->only(['nama_toko', 'alamat']));

        return redirect('/toko')->with('success', 'Toko berhasil diupdate!');
    }

    public function destroy($id)
    {
        $toko = Toko::findOrFail($id);
        $toko->delete();

        return redirect('/toko')->with('success', 'Toko berhasil dihapus!');
    }
}