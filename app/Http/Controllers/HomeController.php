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
        $posts = Post::where('id', '>', 0)->paginate(6);
        
        return view("home" , ['posts'=>$posts]);
       
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
