<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    // TIDAK PERLU $table KARENA NAMA TABEL OTOMATIS = 'products'

    protected $fillable = [
        'name',
        'price',
        'description',
    ];
}

