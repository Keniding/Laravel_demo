<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Por defecto si no se pasa:: -> toma la tabla posts (minuscula y plural)
    protected $table = 'post';

    // Category => categories
    // Lapiz => lapizs (if español::min, plural)
}
