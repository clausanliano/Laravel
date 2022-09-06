<?php

namespace Database\Seeders;

use App\Models\Uf;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UfSeeder extends Seeder
{
    public function run()
    {
        Uf::create([
            'nome'  => 'RIO GRANDE DO NORTE',
            'sigla' => 'RN',
        ]);
    }
}
