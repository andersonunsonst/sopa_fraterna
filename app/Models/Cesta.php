<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Cesta extends Model
{
    use HasFactory;

    protected $table = 'cesta';

    protected $fillable = [
        'tipo_cesta',
        'data_entrega'

    ];

    public function familia(): HasOne
    {
        return $this->hasOne(Familia::class);
    }

}
