<?php

use App\Airport;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class AirportTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 15 ; $i++) { 
            $newAirport = new Airport();
            $newAirport->name = $faker->country();
            $newAirport->code = $faker->regexify('[A-Z]{5}[0-4]{3}');
            $newAirport->lat = $faker->latitude($min = -90, $max = 90);
            $newAirport->lng = $faker->longitude($min = -180, $max = 180); 
            $newAirport->save();
        }
    }
}
