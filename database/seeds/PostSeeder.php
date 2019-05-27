<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Post::class, 50)->create()->each(function($post) {

          $categories = App\Category::inRandomOrder()->take(rand(1, 5))->get();
          $post->categories()->attach($categories);
        });
    }
}
