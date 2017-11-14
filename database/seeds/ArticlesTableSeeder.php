<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 30;

        for($i = 0; $i < $limit; $i++){
        	DB::table('articles')->insert([
        		'title' => $faker->sentence($nbWords = 4, $variableNbWords = true),
        		'content' => $faker->paragraphs($nb = 3, $asText = true),
        	]);
        }
    }
}
