<?php

namespace App\Models\ModelHasRoles;

use Illuminate\Database\Eloquent\Model;

class ModelHasRoles extends Model
{
    protected $table = 'model_has_roles';
    
    protected $fillable = ['role_id', 'model_type', 'model_id', 'opm_id'];


    public function opm()
    {
        return $this->belongsTo('App\Models\Opm\Opm', 'opm_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'model_id', 'id');
    }

    public function roler()
        {
            return $this->belongsTo('App\Roler', 'role_id', 'id');
        }

    public $timestamps = false;
}
