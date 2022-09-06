<?php

namespace Database\Seeders;

use App\Models\Cidade;
use App\Models\Opm;
use Illuminate\Database\Seeder;

class OpmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lista = [
            ['01º BPM ', 'NATAL',4,''],
            ['02º BPM ', 'MOSSORÓ',24,''],
            ['03º BPM', 'PARNAMIRIM',2,''],
            ['04º BPM ', 'NATAL',24,''],
            ['05º BPM', 'NATAL',2,''],
            ['06º BPM ', 'CAICÓ',4,''],
            ['07º BPM', 'PAU DOS FERROS',4,''],
            ['08º BPM ', 'NOVA CRUZ',4,''],
            ['09º BPM', 'NATAL',2,''],
            ['10º BPM ', 'ASSU',4,''],
            ['11º BPM', 'MACAÍBA',2,''],
            ['12º BPM ', 'MOSSORÓ',24,''],
            ['13º BPM ', 'CURRAIS NOVOS',4,''],
            ['14º BPM ', 'JOÃO CÂMARA',4,''],
            ['16ºBPM', 'SÃO GONÇALO DO AMARANTE',24,''],
            ['RPMONT ', 'NATAL',3,''],
            ['ROCAM ', 'NATAL',12,'EXIGE CNH PARA MOTOS'],
            ['01ª CIPM', 'MACAU',4,''],
            ['02ª CIPM', 'ALEXANDRIA',12,''],
            ['03ª CIPM', 'PATU',12,''],
            ['05ª CIPM', 'JARDIM DE PIRANHAS',4,''],
            ['06ª CIPM', 'APODI',12,''],
            ['07ª CIPM', 'CEARÁ-MIRIM',12,''],
            ['08ª CIPM', 'SÃO JOSÉ DE MIPIBU',12,''],
            ['09ª CIPM', 'SÃO PAULO DO POTENGI',12,''],
            ['10ª CIPM', 'CANGUARETAMA',12,''],
            ['01ª CIPRV ', 'NATAL',12,'EXIGE CNH PARA MOTOS'],
            ['BPRED', 'NATAL',8,''],
            ['BPRED', 'MOSSORÓ',4,''],
            ['BPRED', 'CURRAIS NOVOS',4,''],
            ['BPAMB', 'NATAL',4,''],
            ['BPAMB', 'MOSSORÓ',4,''],
            ['BPAMB', 'CAICÓ',4,''],
            ['04ª CIPM', 'GOIANINHA',8,''],
            ['04ª CIPM', 'TIBAU DO SUL',4,''],

        ];

        foreach ($lista as $opm) {
            Opm::create([
                'nome' => $opm[0],
                'sigla' => $opm[0],
                'vagas_masculinas' => 0,
                'vagas_femininas' => 0,
                'vagas_unisex' => $opm[2],
                'observacao' => $opm[3],
                'cidade_id' => Cidade::where('nome', $opm[1])->first()->id,
            ]);
        }
    }
}
