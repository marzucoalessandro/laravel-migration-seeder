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
      $studentList = config('students');



      foreach ($studentList as $value) {
        $newStudent = new Student();
        $newStudent->name = $value['name'];
        $newStudent->lastname = $value['lastname'];
        $newStudent->save();
      }
    }
}
