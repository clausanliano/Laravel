<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opm extends Model
{
    use HasFactory;

    protected $table = 'opms';

    protected $fillable = ['nome', 'sigla', 'vagas_masculinas', 'vagas_femininas', 'vagas_unisex', 'observacao', 'cidade_id'];

    public function cidade(){
        return $this->belongsTo(Cidade::class);
    }

    public function policiais(){
        return $this->hasMany(Policial::class);
    }

    public function policiais_femininos(){
        return $this->hasMany(Policial::class)->where('sexo', 'Feminino');
    }

    public function policiais_masculinos(){
        return $this->hasMany(Policial::class)->where('sexo', 'Masculino');
    }

    public function vagas_masculinas_remanecentes()
    {
        return $this->vagas_masculinas - $this->policiais_masculinos()->count();
    }

    public function vagas_femininas_remanecentes()
    {
        return $this->vagas_femininas - $this->policiais_femininos()->count();
    }

    public function vagas_unisex_remanecentes()
    {
        return $this->vagas_unisex - $this->policiais()->count();
    }

}
