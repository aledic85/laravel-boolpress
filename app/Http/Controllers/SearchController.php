<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Category;
use App\Author;
use App\Post;

class SearchController extends Controller
{
    public function getAllCategoriesAndAuthors() {

      $categories = Category::all();
      $authors = Author::all();
      return view('page.form-search', compact('categories', 'authors'));
    }

    public function search() {

      $title = Input::get('title');
      $author = Input::get('author');
      $authorID = Author::select('id')->where('name', 'LIKE', $author)->get();
      $category = Input::get('category');
      $categoryID = Category::select('id')->where('category_name', 'LIKE', $category)->get();
      $content = Input::get('content');
      $query = Post::where('author_id', '=', $authorID['0']['id']);
                            // ->orWhere('id', 'LIKE', $categoryID)
      if ($title != null) {
        $query->orWhere('title', 'LIKE','%'.$title.'%');
      }elseif ($content != null) {
        $query->orWhere('content', 'LIKE', '%'.$content.'%');
      }

      $posts = $query->get();

      return view('page.results', compact('posts'));

    }
}
