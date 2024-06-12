<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    use HasFactory;
    // Nama tabel di database
    protected $table = 'workshops';

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'title',
        'description',
        'start_time',
        'end_time',
        'capacity',
        'image',
        'user_id',
    ];
}
