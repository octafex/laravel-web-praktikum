<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Toko;
use App\Models\Stok;

class StokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stoks = \App\Models\Stok::with('product', 'toko')->get();
    return view('stok.index', compact('stoks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    $products = Product::all();
    $tokos = Toko::all();
    return view('stok.create', compact('products', 'tokos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'toko_id'    => 'required|exists:toko,id',
            'jumlah'     => 'required|integer|min:0',
       ]);

    Stok::create($request->only(['product_id', 'toko_id', 'jumlah']));

    return redirect('/stok');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $stok = Stok::with('product', 'toko')->findOrFail($id);
        $products = Product::all();
        $tokos = Toko::all();
        return view('stok.edit', compact('stok', 'products', 'tokos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'toko_id'    => 'required|exists:toko,id',
            'jumlah'     => 'required|integer|min:0',
        ]);

        $stok = Stok::findOrFail($id);
        $stok->update($request->only(['product_id', 'toko_id', 'jumlah']));

        return redirect('/stok')->with('success', 'Stok berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
