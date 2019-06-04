<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateRequest;
use App\Http\Requests\EditRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailSender;
use App\Notifications\NewPostCreated;
use Illuminate\Notifications\Notifiable;
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

         $findAuthor = Author::where('name', 'LIKE', $validatedData['name'])->where('lastname', 'LIKE', $validatedData['lastname'])->get();

         if ($findAuthor->isEmpty()) {

           $author = Author::create($validatedData);
           $post->author()->associate($author)->save();
         }

         else {
           $post->author()->associate($findAuthor[0])->save();
         }

         $post->categories()->attach($request['categories']);
         $user = Auth::user();
         $user->notify(new NewPostCreated);
         return redirect('boolpress');
     }

     public function contactUs()
     {
       return view('page.contact-us');
     }

     public function sendMail(Request $request)
     {
       $name = $request->name;
       $lastname = $request->lastname;
       $email = $request->email;
       $title = $request->title;
       $content = $request->description;


       Mail::to('admin@boolpress.it')->queue(new MailSender($name, $lastname, $email, $title, $content));
       return redirect('boolpress');
     }
}
