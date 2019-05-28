<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Category::class, 10)->create()->each(function($category) {

        $posts = App\Post::inRandomOrder()->take(rand(1, 10))->get();
        $category->posts()->attach($posts);
      });
    }
}
