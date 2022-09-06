<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'uf_id'];


    public function uf()
    {
        return $this->belongsTo(Uf::class, 'uf_id', 'id');
    }

}
