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
        $makeups = Post::where('category', 'مكياج')->paginate(5);
        $cure_humans = Post::where('category', 'علاج البشر')->paginate(5);
        $makeup_courses = Post::where('category', 'دورات تعليمية للمكياج')->paginate(5);
        $products = Post::where('category', 'منتجات')->paginate(5);

        return view('post.index', compact('makeups', 'cure_humans', 'makeup_courses', 'products'));
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
