<?php

namespace Database\Seeders;

use App\Models\Bairro;
use App\Models\Cidade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BairroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nomes_bairros = ['CIDADE ALTA', 'TIROL', 'ROCAS'];
        $cidade_id = Cidade::all()->first()->id;

        foreach ($nomes_bairros as $nome) {
            $cidade = Bairro::create([
                'nome'  =>  $nome,
                'cidade_id'  =>  $cidade_id,
            ]);
        }
    }
}
