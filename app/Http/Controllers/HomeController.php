<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       
        return view('home');
    }

    public function category(string $category)
    {
        $posts = Post::where('category', $category)->paginate(5);
        return view('categories.index', compact( 'posts'));
    }

    public function books()
    {
        $books = Book::paginate(5);
        return view("Book.books" , ['books'=>$books]);
    }
    public function bookDetals(string $id)
    {
        $book = Book::where('id', $id)->first();
        if ($book) {
            return view("Book.bookDetal", ['book' => $book]);
        }
        abort(404); ;
    }
 
    public function show(string  $id_post)
    {
        $post = Post::where('id', $id_post)->first();
       
        if ($post) {
            return view("categories.PostDetal", ['post' => $post]);
        }
        return  new Response('', 205);
    }



}
