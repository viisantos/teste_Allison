<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1
        DB::table('profile')->insert([
            'nome' => 'vitoria',
            'sobrenome' => 'santos',
            'email' => 'vitoria@gmail.com',
            'pais' => 'Brasil',
            'cidade' => 'Rio de Janeiro',
        ]);

        DB::table('profile')->insert([
            'nome' => 'Maria',
            'sobrenome' => 'santos',
            'email' => 'maria@gmail.com',
            'pais' => 'Brasil',
            'cidade' => 'Rio de Janeiro',
        ]);

        DB::table('profile')->insert([
            'nome' => 'Joana',
            'sobrenome' => 'santos',
            'email' => 'joana@gmail.com',
            'pais' => 'Brasil',
            'cidade' => 'Rio de Janeiro',
        ]);
    }
}
