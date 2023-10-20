<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

class UserFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {


        return [

            'titre' => $this->faker->name,
            'description' => $this->faker->email,
            'surface' => $this->faker->randomNumber(),
            'nb_pieces' => $this->faker->randomNumber(),
            'nb_chambres' => $this->faker->randomNumber(),
            'nb_etages' => $this->faker->randomNumber(),
            'prix' => $this->faker->randomNumber(),
            'ville' => $this->faker->city(),
            'adresse' => $this->faker->address,
            'code_postal' => $this->faker->countryCode,
            'vendu' => $this->faker->boolean,
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
