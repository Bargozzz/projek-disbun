<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Komoditas extends Model {
    use HasFactory;
    
    protected $primaryKey = 'id_komoditas';

    public function item(): HasMany {
        return $this->hasMany(Item::class, 'id_komoditas');
    }
}