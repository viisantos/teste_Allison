<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CorporativaSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('corporativa')->insert([
            'profile_id'     => 1,
            'cargo'          => 'Dev Junior',
            'funcao'         => 'Dev Junior',
            'tipo_de_tecnologia'  => 'Java',
            'empresa'  => 'XPTO.SA',
            'modalidade'  => 'Presencial',
            'salario'  => 10.000
        ]);
    }
}
