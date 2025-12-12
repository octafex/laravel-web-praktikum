@extends('layouts.app')

@section('title', 'Edit Toko')
@section('page-title', '✏️ Edit Toko')

@section('content')

    <div class="content">
        <form action="{{ route('toko.update', $toko->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Nama Toko</label>
                <input type="text" name="nama_toko" value="{{ $toko->nama_toko }}" required class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" value="{{ $toko->alamat }}" required class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div class="pt-4">
                <button type="submit" class="btn btn-blue w-full">Update Toko</button>
            </div>
        </form>

        <div class="mt-4">
            <a href="{{ route('toko.index') }}" class="btn btn-link">← Kembali ke Daftar Toko</a>
        </div>
    </div>
</div>
@endsection