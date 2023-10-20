<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class TableTeste extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('proprietes')->insert([

                'titre' => $faker->name,
                'description' => $faker->email,
                'surface' => $faker->randomNumber(),
                'nb_pieces' => $faker->randomNumber(),
                'nb_chambres' => $faker->randomNumber(),
                'nb_etages' => $faker->randomNumber(),
                'prix' => $faker->randomNumber(),
                'ville' => $faker->city(),
                'adresse' => $faker->address,
                'code_postal' => $faker->countryCode,
                'vendu' => $faker->boolean,
            ]);

        }
    }
}
