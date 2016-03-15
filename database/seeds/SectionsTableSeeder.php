<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class SectionsTableSeeder extends Seeder
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
            DB::table('sections')->insert([
                'section_name' => $faker->word
            ]);
        }
    }
}
