<?php

namespace App\Http\Controllers;

use App\Models\makeupbook;
use App\Http\Requests\StoremakeupbookRequest;
use App\Http\Requests\UpdatemakeupbookRequest;
use Illuminate\Support\Str;

class MakeupbookController extends Controller
{
   
    public function index()
    {
        $books = makeupbook::paginate(5);
        return view("books.index" , ['books'=>$books]);
    }

   
    public function create()
    {
        return view( 'books.create');
    }

   
    public function store(StoremakeupbookRequest $request)
    {
        $book_info= request()->all();
        $book = new makeupbook();
        $image= request()->image;
        if($image){
            $image_info = time().'.'.$image->extension();
            $book->image = $image_info;
            $image->move(public_path('images/books'), $image_info);  
         }
        $book->title= $book_info['title'];
        $book->price= $book_info['price'];
        $book->description= $book_info['description'];
        
        $book->save();
        return to_route("book.index");
    }

    
    public function show(makeupbook $makeupbook)
    {
        return view("books.show", ['book' => $makeupbook]);
    }

   
    public function edit(makeupbook $makeupbook)
    {
         return view('book.edit', ['book' => $makeupbook]);
    }

    
    public function update(UpdatemakeupbookRequest $request, makeupbook $makeupbook)
    {
        $book_info= request()->all();
        $img =request()->image;
        if($img){
            if($makeupbook->image && (public_path('images/books/' . $makeupbook->image))){
                unlink(public_path('images/books/' . $makeupbook->image));
            }
            $img_name = time().'.' .$img->extension();
            $makeupbook->image = $img_name;
            $img->move(public_path('images/books'), $img_name);
        }
        $makeupbook->title= $book_info['title'];
        $makeupbook->price= $book_info['price'];
        $makeupbook->description = $book_info['description'];
      
        $makeupbook->save();
        return to_route("book.index");   
    }

   
    public function destroy(makeupbook $makeupbook)
    {
        if($makeupbook->image){
            try {
                unlink(public_path('images/books/'.$makeupbook->image));
            } catch (\Throwable $th){}
        }
        $makeupbook->delete();
        return back()->with('success', 'Book has been delete successfully');
    }
}
