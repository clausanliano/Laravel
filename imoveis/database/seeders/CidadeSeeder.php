<?php

namespace Database\Seeders;

use App\Models\Cidade;
use App\Models\Uf;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CidadeSeeder extends Seeder
{
    public function run()
    {
        $nomes_cidades = ['NATAL', 'PARNAMIRIM', 'MACAIBA'];
        $uf_id = Uf::all()->first()->id;

        foreach ($nomes_cidades as $nome) {
            $cidade = Cidade::create([
                'nome'  =>  $nome,
                'uf_id'  =>  $uf_id,
            ]);
        }
    }
}
