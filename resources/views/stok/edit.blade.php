@extends('layouts.app')

@section('title', 'Edit Stok')
@section('page-title', '✏️ Edit Stok')

@section('content')
<div class="card">

    <div class="content">
        <form action="{{ route('stok.update', $stok->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Produk</label>
                <select name="product_id" required class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    @foreach($products as $product)
                        <option value="{{ $product->id }}" {{ $stok->product_id == $product->id ? 'selected' : '' }}>
                            {{ $product->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Toko</label>
                <select name="toko_id" required class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    @foreach($tokos as $toko)
                        <option value="{{ $toko->id }}" {{ $stok->toko_id == $toko->id ? 'selected' : '' }}>
                            {{ $toko->nama_toko }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Jumlah Stok</label>
                <input type="number" name="jumlah" value="{{ $stok->jumlah }}" required class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div class="pt-4">
                <button type="submit" class="btn btn-blue w-full">Update Stok</button>
            </div>
        </form>

        <div class="mt-4">
            <a href="{{ route('stok.index') }}" class="btn btn-link">← Kembali ke Daftar Stok</a>
        </div>
    </div>
</div>
@endsection