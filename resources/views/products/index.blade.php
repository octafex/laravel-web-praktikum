@extends('layouts.app')

@section('title', 'Daftar Produk')
@section('page-title', '📦 Daftar Produk')

@section('content')
<div class="card">

    <div class="content">
        <a href="{{ route('products.create') }}" class="btn btn-blue">+ Tambah Produk</a>

        @if($products->isEmpty())
            <p style="text-align: center; color: #888; margin-top: 20px;">Belum ada produk.</p>
        @else
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                            <td>{{ Str::limit($product->description, 30) }}</td>
                            <td>
                                <a href="{{ route('products.edit', $product->id) }}" class="action-btn edit">Edit</a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="action-btn delete" onclick="return confirm('Yakin hapus?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif

@if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

        <div style="margin-top: 20px;">
            <a href="/dashboard" class="btn btn-link">← Kembali ke Dashboard</a>
        </div>
    </div>
</div>
@endsection