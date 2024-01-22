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
        $this->call(CarroSeeder::class);
        $this->call(ClienteSeeder::class);
        $this->call(LocacaoSeeder::class);
        $this->call(CorporativaSeed::class);
        $this->call(ProfileSeed::class);
        // \App\Models\User::factory(10)->create();
    }
}
