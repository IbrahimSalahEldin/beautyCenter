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

    
    public function show(makeupbook $book)
    {
        return view("books.show", ['book' => $book]);
    }

   
    public function edit(makeupbook $book)
    {
         return view('books.edit', ['book' => $book]);
    }

    
    public function update(UpdatemakeupbookRequest $request, makeupbook $book)
    {
        $book_info= request()->all();
        $img =request()->image;
        if($img){
            if($book->image && (public_path('images/books/' . $book->image))){
                unlink(public_path('images/books/' . $book->image));
            }
            $img_name = time().'.' .$img->extension();
            $book->image = $img_name;
            $img->move(public_path('images/books'), $img_name);
        }
        $book->title= $book_info['title'];
        $book->price= $book_info['price'];
        $book->description = $book_info['description'];
      
        $book->save();

        return to_route("book.index");
    }

   
    public function destroy(makeupbook $book)
    {
        if($book->image){
            try {
                unlink(public_path('images/books/'.$book->image));
            } catch (\Throwable $th){}
        }
        $book->delete();
        return back()->with('success', 'Book has been delete successfully');
    }
}
