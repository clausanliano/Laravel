<?php

namespace Database\Seeders;

use App\Models\Uf;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Uf::create([
            'nome'  => 'RIO GRANDE DO NORTE',
            'sigla' => 'RN',
        ]);
    }
}
