<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $newTrain = new Train();
            $newTrain-> azienda = $faker->randomElement(['Trenitalia', 'Italo', 'Frecciarossa']);
            $newTrain-> stazione_partenza = $faker->city;
            $newTrain-> stazione_arrivo = $faker->city;
            $newTrain-> orario_partenza = $faker->time();
            $newTrain-> orario_arrivo = $faker->time();
            $newTrain-> data_partenza = $faker->date();
            $newTrain-> codice_treno = strtoupper($faker->bothify('??###'));
            $newTrain-> totale_carrozze = $faker->numberBetween(4, 20);
            $newTrain-> in_orario = $faker->boolean;
            $newTrain-> cancellato = $faker->boolean;
            $newTrain->save();

            
        }
    }
}
