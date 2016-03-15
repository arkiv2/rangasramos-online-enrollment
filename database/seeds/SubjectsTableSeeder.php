<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,20) as $index) {
            DB::table('subjects')->insert([
                'subject_name' => $faker->word,
                'subject_code' => $faker->numerify("SUBJ-###-##"),
                'section_id' => $faker->randomNumber(1)
            ]);
        }
    }
}
