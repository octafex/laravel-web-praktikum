@extends('layouts.app')

@section('title', 'Dashboard')
@section('page-title', 'OctaFlex')

@section('content')
<div class="card">
    <h3 style="text-align: center; color: #000; margin-bottom: 20px;">🎉 Selamat Datang di OctaFlex Dashboard</h3>
    <p style="text-align: center; font-size: 1.1rem; color: #555;">
        Halo, <strong>{{ auth()->user()->name ?? 'User' }}</strong>!
    </p>
    <p style="text-align: center; margin: 20px 0; color: #666;">
        Kelola produk, toko, dan stok kamu dengan mudah.
    </p>

    <div style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap; margin-top: 30px;">
        <a href="/products" class="btn btn-blue">📦 Kelola Produk</a>
        <a href="/toko" class="btn btn-green">🏪 Kelola Toko</a>
        <a href="/stok" class="btn btn-yellow">📦 Kelola Stok</a>
    </div>
</div>

<div class="card">
    <h4 style="color: #000; margin-bottom: 15px;">📋 Ringkasan</h4>
    <ul style="list-style: none; padding: 0;">
        <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✅ Login/logout berfungsi</li>
        <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✅ CRUD produk siap</li>
        <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✅ CRUD toko siap</li>
        <li style="padding: 8px 0;">✅ CRUD stok siap</li>
    </ul>
</div>
@endsection