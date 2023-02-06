<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//importiamo il model person da poterlo utilizzare
use App\Models\Person;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //richiamiamo il model con la factory con count gli diciamo quanti dati vogliamo in tabella ed infine andaimao a creare con create()
        // N.B:Per far si che i dati compaino in tabella usiamo il comando db:seed nel terminale
       Person::factory()->count(50)->create();
    }
}
