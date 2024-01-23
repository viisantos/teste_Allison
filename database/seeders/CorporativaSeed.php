<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CorporativaSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('corporativa')->insert([
            'profile_id' => 1,
            'cargo' => 'Dev Junior',
            'funcao' => 'Dev Junior',
            'tipo_de_tecnologia' => 'Java',
            'empresa' => 'XPTO.SA',
            'modalidade' => 'Presencial',
            'salario' => 10.000,
        ]);

        DB::table('corporativa')->insert([
            'profile_id' => 2,
            'cargo' => 'Dev Pleno',
            'funcao' => 'Dev Senior',
            'tipo_de_tecnologia' => 'Laravel',
            'empresa' => 'XPTO.SA',
            'modalidade' => 'Hibrido',
            'salario' => 10.050,
        ]);

        DB::table('corporativa')->insert([
            'profile_id' => 3,
            'cargo' => 'Dev Junior',
            'funcao' => 'Dev Junior',
            'tipo_de_tecnologia' => 'Python',
            'empresa' => 'XPTO.SA',
            'modalidade' => 'Remoto',
            'salario' => 10.100,
        ]);
    }
}
