@extends('layouts.app')

@section('title', 'Daftar Stok')
@section('page-title', '📦 Daftar Stok')

@section('content')
<div class="card">

    <div class="content">
        <a href="{{ route('stok.create') }}" class="btn btn-blue">+ Tambah Stok</a>

        @if($stoks->isEmpty())
            <p style="text-align: center; color: #888; margin-top: 20px;">Belum ada stok.</p>
        @else
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Produk</th>
                            <th>Toko</th>
                            <th>Jumlah</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($stoks as $s)
                        <tr>
                            <td>{{ $s->id }}</td>
                            <td>{{ $s->product->name ?? '–' }}</td>
                            <td>{{ $s->toko->nama_toko ?? '–' }}</td>
                            <td>{{ $s->jumlah }}</td>
                            <td>
                                <a href="{{ route('stok.edit', $s->id) }}" class="action-btn edit">Edit</a>
                                <form action="{{ route('stok.destroy', $s->id) }}" method="POST" class="inline">
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

        <div style="margin-top: 20px;">
            <a href="/dashboard" class="btn btn-link">← Kembali ke Dashboard</a>
        </div>
    </div>
</div>
@endsection