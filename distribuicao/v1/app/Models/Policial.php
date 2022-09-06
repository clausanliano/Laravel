<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Policial extends Model
{
    use HasFactory;

    protected $table = 'policiais';

    protected $fillable = ['nome', 'matricula', 'sexo', 'classificacao', 'observacao', 'opm_id', 'policial_id'];

    public function opm()
    {
        return $this->belongsTo(Opm::class);
    }

    public function procurador()
    {
        return $this->hasOne(Policial::class);
    }
}
