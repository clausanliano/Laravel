<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opm extends Model
{
    use HasFactory;

    protected $table = 'opms';

    protected $fillable = ['nome', 'sigla', 'opm_id', 'imovel_id'];


    public function imovel()
    {
        return $this->belongsTo(Imovel::class, 'imovel_id', 'id');
    }

    public function opm_superior()
    {
        return $this->belongsTo(Opm::class, 'opm_id', 'id');
    }

}
