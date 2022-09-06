<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    use HasFactory;

    protected $table = 'imoveis';

    protected $fillable = [
        'nome', 'logradouro', 'numero', 'CEP', 'referencia', 'complemento',
        'observacao', 'latitude', 'longitude', 'bairro_id'
    ];

    public function bairro()
    {
        return $this->belongsTo(Bairro::class, 'bairro_id', 'id');
    }

}
