<?php

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
        $this->call(LeiSeeder::class);
        $this->call(SituacaoTableSeeder::class);
        $this->call(PermissoesSeeder::class);
        $this->call(UserSeeder::class);
    }
}
