<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'articles';

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'title',
        'content',
        'image',
        'user_id',
    ];
}
