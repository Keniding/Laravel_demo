<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Por defecto si no se pasa:: -> toma la tabla posts (minuscula y plural)
    protected $table = 'post';

    // Category => categories
    // Lapiz => lapizs (if español::min, plural)

    // public function title(): Attribute {
    //     return Attribute::make(
    //         // Mutador
    //         set: function($value) {
    //             return strtolower($value);
    //         },
    //         // Accesores
    //         get: function($value) {
    //             return ucfirst($value);
    //         }
    //     );
    // }

    protected function casts(): array {
        return [
            'title' => 'string',
            'content' => 'string',
            'category' => 'string',
            'published_at' => 'datetime',
            'is_active' => 'boolean'
            ];
    }

    protected function title(): Attribute {
        return Attribute::make(
            set: fn ($value) => strtoupper($value),
            get: fn ($value) => ucfirst($value)
        );
    }

    // Binding para inferencia de nombre
    // Por default en id porque es el identificador comun
    // Util en caso no se usa la propiedad id

    // public function getRouteKeyName() {
    //     return 'slug';
    // }
}
