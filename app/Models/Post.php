<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model 
{
    use HasFactory;
    // protected $fillable = ['title, jenis_komoditas, jenis_item, slug, body'];

    public function varietas(): BelongsTo
    {
        return $this->belongsTo(Varietas::class, 'id_varietas');
    }

}


