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


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function order_list()
    {
        return $this->belongsTo(OrderItem::class);
    }
    public function review()
    {
        return $this->hasOne(Review::class);
    }
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}

