@extends('layouts.app')

@section('title', 'Daftar Toko')
@section('page-title', '🏪 Daftar Toko')

@section('content')
<div class="card">

    <div class="content">
        <a href="{{ route('toko.create') }}" class="btn btn-blue">+ Tambah Toko</a>

        @if($toko->isEmpty())
            <p style="text-align: center; color: #888; margin-top: 20px;">Belum ada toko.</p>
        @else
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Toko</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($toko as $t)
                        <tr>
                            <td>{{ $t->id }}</td>
                            <td>{{ $t->nama_toko }}</td>
                            <td>{{ $t->alamat }}</td>
                            <td>
                                <a href="{{ route('toko.edit', $t->id) }}" class="action-btn edit">Edit</a>
                                <form action="{{ route('toko.destroy', $t->id) }}" method="POST" class="inline">
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