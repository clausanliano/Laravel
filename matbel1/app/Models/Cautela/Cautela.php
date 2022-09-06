<?php

namespace App\Models\Cautela;

use Illuminate\Database\Eloquent\Model;

class Cautela extends Model
{
    protected $table = 'cautelas';

    protected $fillable = ['id', 'usuario', 'dt_cautela', 'dt_exclusao', 'opm_id', 'policial_id', 'arma_id', 'cautela', 'quantidade'];

    public function opm()
    {
        return $this->belongsTo('App\Models\Opm\Opm', 'opm_id', 'id');
    }

    public function policial()
    {
        return $this->belongsTo('App\Models\Policial\Policial', 'policial_id', 'id');
    }

    public function usuario()
    {
        return $this->belongsTo('App\Models\Policial\Policial', 'usuario', 'id');
    }

    public function arma()
    {
        return $this->belongsTo('App\Models\Arma\Arma', 'arma_id', 'id');
    }



}