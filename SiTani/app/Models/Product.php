<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'products';

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'category_id',
        'image',
    ];
}