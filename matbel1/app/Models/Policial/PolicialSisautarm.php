<?php

namespace App\Models\Policial;

use Illuminate\Database\Eloquent\Model;

class PolicialSisautarm extends Model
{
    protected $table = 'policial';

    protected $fillable = [ 'nome', 
                            'matricula', 
                            'rg', 
                            'graduacao', 
                            'opm', 
                            'dt_inc', 
                            'cautelada'];

}
