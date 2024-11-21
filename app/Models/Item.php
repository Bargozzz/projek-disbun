<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Item extends Model
{
    use HasFactory;
    
    //perintah jika ingin menggunakan nama yang berbeda untuk tabel
    // protected $table = 'item';

    // many to one (Item to Komoditas) ke atas didalam relasi
    public function komoditas(): BelongsTo {
        return $this->belongsTo(Komoditas::class, 'id_komoditas');
    }

    protected $primaryKey = 'id_item';


    // app/Models/Item.php

public function varietas(): HasMany
{
    return $this->hasMany(Varietas::class, 'id_item');
}


    
}
