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
        factory(App\Post::class, 50)->make()->each(function($post) {

          $author = App\Author::inRandomOrder()->first();
          $post->author()->associate($author);
          $post->save();
          $categories = App\Category::inRandomOrder()->take(rand(1, 5))->get();
          $post->categories()->attach($categories);
          $post->save();
        });
    }
}
