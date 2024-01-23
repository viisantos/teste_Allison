<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        // $this->call(CorporativaSeed::class);
        // $this->call(ProfileSeed::class);
        \App\Models\Allison_desafio_models\Profile::factory(10)->create();
        \App\Models\Allison_desafio_models\Corporativa::factory(10)->create();
    }
}
