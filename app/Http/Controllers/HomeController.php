<?php

namespace App\Http\Controllers;

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
 
    public function show(string  $id_post)
    {
        $post = Post::where('id', $id_post)->first();
       
        if ($post) {
            return view("PostDetal", ['post' => $post]);
        }
        return  new Response('', 205);
    }

}
