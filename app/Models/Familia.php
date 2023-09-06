<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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

    // public function cesta(): BelongsTo
    // {
    //     return $this->belongsTo(Cesta::class);
    // }

    public function membro(): BelongsToMany
    {
       return $this->belongsToMany(MembroFamilia::class, 'membroFamiliar', 'familia_id');
    }
       
}
