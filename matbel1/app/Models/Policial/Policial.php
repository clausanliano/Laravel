<?php

namespace App\Models\Policial;

use Illuminate\Database\Eloquent\Model;

class Policial extends Model
{
    protected $table = 'policiais';

    protected $fillable = [ 'id',
                            'nome', 
                            'nome_guerra', 
                            'cpf', 
                            'precedencia', 
                            'matricula', 
                            'rg', 
                            'numero_praca', 
                            'nome_pais', 
                            'graduacao', 
                            'opm', 
                            'dt_inc'];
}

