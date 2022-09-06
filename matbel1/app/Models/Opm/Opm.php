<?php

namespace App\Models\Opm;

use Illuminate\Database\Eloquent\Model;

class Opm extends Model
{
    protected $table = 'opms';
    
    protected $fillable = [ 'id',
                            'nome', 
                            'codigo', 
                            'nome_pais'];

}
