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
         // 1
         DB::table('corporativa')->insert([
            'nome' 		    => 'vitoria',
            'sobrenome'     => 'santos',
            'email'         => 'vitoria@gmail.com',
			'pais' 		    => 'Brasil', 
			'cidade' 		=> 'Rio de Janeiro'
        ]);
    }
}
