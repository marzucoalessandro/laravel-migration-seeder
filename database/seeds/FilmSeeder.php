<?php

use Illuminate\Database\Seeder;
use App\Film;
use Faker\Generator as Faker;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 10; $i++) {
        $newCourse = new Film();
        $newCourse->nome = $faker->name();
        $newCourse->anno = $faker->date($format = 'Y-m-d');
        $newCourse->nazione = $faker->countryCode();
        $newCourse->save();
      }
    }
}
