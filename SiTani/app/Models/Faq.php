<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;
    protected $table = "faq";
    protected $fillable =["header", "content"];

    public function faqAdmin()
    {
        return $this->hasMany(faqAdmin::class);

    }
}
