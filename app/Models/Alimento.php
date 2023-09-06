<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Alimento extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 'quantidade', 'tipo_quantidade', 'validade'
    ];

    // public function cestas(){
    //     return $this->belongsToMany(Cesta::class, 'alimentocesta', 'id', 'cesta_id');
    // }

    public function cestas()
    {
        return $this->belongsToMany(Cesta::class);
    }

}
