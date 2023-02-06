<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    //Andiamo a richiamre la classe PersonSeeder con questo metodo
    {
        $this->call([

            PersonSeeder::class,
        ]);
    }
}
