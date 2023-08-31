<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Familia extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'nome',
        'parentesco',
        'idade',
        'rua',
        'numero',
        'bairro',
        'cidade',
        'estado',
        'telefone',
        'email'

    ];

    public function familia(){
        return $this->belongsTo(Cesta::class);
    }
       
}
