<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    //  public function __construct()
    //  {
    //      $this->middleware('auth');
    //  }

    public function index()
    {
        $posts = Post::where('id', '>', 0)->paginate(5);
        
        return view("post.index" , ['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    { 
        $post_info= request()->all();
        $post = new Post();
        $image= request()->image;
        if($image){
            $image_info = time().'.'.$image->extension();
            $post->image = $image_info;
            $image->move(public_path('images/posts'), $image_info);  
        }
        $post->title= $post_info['title'];
        $post->price= $post_info['price'];
        $post->description = $post_info['description'];
        $post->slug =  Str::slug($request->post('title'));
        
        $post->save();
        return to_route("post.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string  $id_post)
    {
        $post = Post::where('id', $id_post)->first();
        if ($post) {
            return view("post.view", ['post' => $post]);
        }
        return ;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
       if($post){
        return view('post.edit',['post'=> $post]);
       }else {
          abort(404);
      }
       
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, string $id)
    {
        $post_info= request()->all();
        $post = Post::where('id', $id)->first();
        $img =request()->image;
        if($img){
            if($post->image && (public_path('images/posts/' . $post->image))){
                unlink(public_path('images/posts/' . $post->image));
            }
            $img_name = time().'.' .$img->extension();
            $post->image = $img_name;
            $img->move(public_path('images/posts'), $img_name);
        }
        $post->title= $post_info['title'];
        $post->price= $post_info['price'];
        $post->description = $post_info['description'];
        $post->slug =  Str::slug($request->post('title'));
        $post->save();
        return to_route("post.index");   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);
        if ($post) {
            if($post->image){
                try {
                   unlink(public_path('images/posts/'. $post->image ));
                } catch (\Throwable $th) {}
            }
        }
        $post->delete();
        // return to_route("posts.index")->with('success', 'Post has been deleted successfully');
        return back()->with('success', 'Post has been deleted successfully');
    }
}
