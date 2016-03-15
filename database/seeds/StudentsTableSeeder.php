<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,10) as $index) {
            DB::table('students')->insert([
                'student_no' => $faker->numerify("S-20##-###-###"),
                'section_id' => $faker->randomNumber(1),
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'middle_name' => $faker->lastName,
            ]);
        }
    }
}
