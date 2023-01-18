<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // istanziare un oggetto del modello
        $newTrain = new Train();
        // inserisci nuovi dati
        $newTrain->company = $faker->company();
        $newTrain->departure_station = $faker->city();
        $newTrain->arrival_staion = $faker->city();
        $newTrain->departure_time = $faker->dateTimeInInterval('-1 week', '+3 weeks');
        $newTrain->arrival_time = $faker->dateTimeInInterval('+1 hour', '+20 hours');
        $newTrain->train_code = $faker->regexify('[0-9]{2}[A-Z]{2}[0-9]{3}');
        $newTrain->wagons = $faker->numberBetween(1, 20);
        $newTrain->is_in_time = $faker->boolean();
        $newTrain->is_cancelled = $faker->boolean();
        // carica anche gli updates
        $newTrain->binary = $faker->numberBetween(1, 20);

        // salvo i dati nel database
        $newTrain->save();
    }
}
