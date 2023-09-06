<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MembroFamilia extends Model
{
    use HasFactory;

    protected $table = 'membroFamiliar';

    protected $fillable = [
       'familia_id',
       'nome',
       'parentesco',
       'idade',
       'telefone',
       'email'
    ];

    public function familia(): HasMany
    {
        return $this->hasMany(Familia::class);
    }
}
