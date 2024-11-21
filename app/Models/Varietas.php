<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Varietas extends Model
{
    use HasFactory;

    public function item(): BelongsTo {
        return $this->belongsTo(Item::class, 'id_item');
    }

    protected $primaryKey = 'id_varietas';

    public function post(): HasMany {
        return $this->hasMany(Post::class, 'id_varietas');
    }

    public function produk()
{
    return $this->hasMany(Produk::class, 'id_varietas');
}
}
