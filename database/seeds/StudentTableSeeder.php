<?php

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
/**
* Seed the application's database.
*
* @return void
*/
  public function run()
  {
    Eloquent::unguard();

    $faker = Faker\Factory::create();

    foreach(range(1, 200) as $index)
    {
      Student::create([
        'student_id' => $faker->randomNumber(8),
        'first_name' => $faker->firstName(),
        'last_name' => $faker->lastName(),
        'class' => $faker->randomDigit(),
        'gender' => 'M',
        'biography' => $faker->realText(),
        'birthday' => $faker->dateTimeThisCentury(),
        'school_id' => $faker->randomNumber(3),
      ]);
    }

  }
}