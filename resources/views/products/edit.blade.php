@extends('layouts.app')

@section('title', 'Edit Produk')
@section('page-title', '✏️ Edit Produk')

@section('content')
<div class="card">

    <div class="content">
        <form action="{{ route('products.update', $product->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Nama Produk</label>
                <input type="text" name="name" value="{{ $product->name }}" required class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div class="form-group">
                <label>Harga Produk</label>
                <input type="number" name="price" value="{{ $product->price }}" required class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div class="form-group">
                <label>Deskripsi</label>
                <textarea name="description" required rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">{{ $product->description }}</textarea>
            </div>

            <div class="pt-4">
                <button type="submit" class="btn btn-blue w-full">Update Produk</button>
            </div>
        </form>

        <div class="mt-4">
            <a href="{{ route('products.index') }}" class="btn btn-link">← Kembali ke Daftar Produk</a>
        </div>
    </div>
</div>
@endsection