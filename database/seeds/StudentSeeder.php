<?php

use Illuminate\Database\Seeder;
use App\Student;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $studentList = [
        [
          'name' => 'Alessandro',
          'lastname' => 'primo'
        ],
        [
          'name' => 'Giorgio',
          'lastname' => 'secondo'
        ],
        [
          'name' => 'Mario',
          'lastname' => 'terzo'
        ],
        [
          'name' => 'Franco',
          'lastname' => 'quarto'
        ]
      ];

      foreach ($studentList as $value) {
        $newStudent = new Student();
        $newStudent->name = $value['name'];
        $newStudent->lastname = $value['lastname'];
        $newStudent->save();
      }
    }
}
