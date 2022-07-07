<?php

use App\Flight;
use App\Airport;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class FlightTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $airport_ids = Airport::pluck('id')->toArray();

        for ($i=0; $i < 15 ; $i++) { 
            $newFlight = new Flight();
            $newFlight->airport_id = $faker->randomElement($airport_ids);
            $newFlight->code_departure = $faker->regexify('[A-Z]{5}[0-4]{3}');
            $newFlight->code_arrival = $faker->regexify('[A-Z]{5}[0-4]{3}');
            $newFlight->price = $faker->randomFloat(2, 50, 1000);
            $newFlight->save();
        }
    }
}
