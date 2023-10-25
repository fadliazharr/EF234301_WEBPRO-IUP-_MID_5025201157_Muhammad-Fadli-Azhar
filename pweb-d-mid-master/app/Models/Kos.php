<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kos extends Model
{
    use HasFactory;

    protected $table = 'kos';
    protected $fillable = [
        'name', 'slug', 'description', 'price', 'phone', 'image', 'address', 'maps'
    ];
}
