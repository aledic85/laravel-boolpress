<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateRequest;
use App\Http\Requests\EditRequest;
use App\Post;
use App\Category;
use App\Author;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     public function create()
     {
         $categories = Category::all();
         return view('page.new-post', compact('categories'));
     }

     public function store(CreateRequest $request)
     {
         $validatedData = $request->validated();
         $post = Post::make($validatedData);
         $author = Author::create($validatedData);
         $post->author()->associate($author)->save();
         $post->categories()->attach($request['categories']);
         return redirect('boolpress');
     }
}
