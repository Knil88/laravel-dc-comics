<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Person>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // Utilizziamo la  factory per creare dei dati faker che andranno a riempire la nostra tabella

        return [
          'name'=>fake()->firstName(),
          'lastname'=>fake()->lastName(),
          'date_of_birth'=>fake()->date(),
          'height'=>fake()->numberBetween(0.00,2.20)
        ];
    }
}
