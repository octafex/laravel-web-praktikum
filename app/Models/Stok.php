<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Stok extends Model
{
    use HasFactory;

    protected $table = 'stock';
    protected $fillable = ['product_id', 'toko_id', 'jumlah'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function toko()
    {
        return $this->belongsTo(Toko::class, 'toko_id');
    }
}