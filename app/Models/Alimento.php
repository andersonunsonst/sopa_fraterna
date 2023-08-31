<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alimento extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 'quantidade', 'tipo_quantidade', 'validade'
    ];

    public function cesta(){
        return $this->belongsTo(Cesta::class);
    }

}
