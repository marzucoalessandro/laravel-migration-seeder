<?php

use Illuminate\Database\Seeder;
use App\Course;
use Faker\Generator as Faker;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 5; $i++) {
        $newCourse = new Course();
        $newCourse->nome = $faker->name();
        $newCourse->materia = $faker->CountryCode();
        $newCourse->classe = $faker->randomLetter();
        $newCourse->save();
      }
    }
}
