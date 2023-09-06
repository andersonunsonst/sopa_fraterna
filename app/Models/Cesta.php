<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Cesta extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo_cesta',

    ];


    public function alimentos()
    {
       return $this->belongsToMany(Alimento::class);
    }

    public function familias()
    {
        return $this->belongsToMany(Familia::class);
    }


}
