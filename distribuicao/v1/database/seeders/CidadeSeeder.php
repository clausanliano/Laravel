<?php

namespace Database\Seeders;

use App\Models\Cidade;
use Illuminate\Database\Seeder;

class CidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lista = [
            ['ALEXANDRIA', ''],  //1
            ['APODI', ''],  //2
            ['ASSU', ''],  //3
            ['CAICÓ', ''],  //4
            ['CANGUARETAMA', ''],  //5
            ['CEARÁ-MIRIM', ''],  //6
            ['CURRAIS NOVOS', ''],  //7
            ['GOIANINHA', ''],  //8
            ['JARDIM DE PIRANHAS', ''],  //9
            ['JOÃO CÂMARA', ''],  //10
            ['MACAÍBA', ''],  //11
            ['MACAU', ''],  //12
            ['MOSSORÓ', ''],  //13
            ['NATAL', ''],  //14
            ['NOVA CRUZ', ''],  //15
            ['PARNAMIRIM', ''],  //16
            ['PATU', ''],  //17
            ['PAU DOS FERROS', ''],  //18
            ['SÃO GONÇALO DO AMARANTE', ''],  //19
            ['SÃO JOSÉ DE MIPIBU', ''],  //20
            ['SÃO PAULO DO POTENGI', ''],  //21
            ['TIBAU DO SUL', ''],  //22

        ];

        foreach ($lista as $cidade) {
            Cidade::create([
                'nome' => $cidade[0],
                'observacao' => $cidade[1],
            ]);
        }
    }
}
