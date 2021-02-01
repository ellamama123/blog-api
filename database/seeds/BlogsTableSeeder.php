<?php

use Illuminate\Database\Seeder;
use App\Blog;
class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            Blog::create([
                'title' => $faker->sentence,
                'des' => $faker->sentence,
                'detail' => $faker->paragraph,
                'category' => $faker->numberBetween(1,7),
                'public' => $faker->numberBetween(0,1),
                'data_pubblic' => $faker->date,
                'thumbs' => $faker->paragraph,
            ]);
        }
    }
}
