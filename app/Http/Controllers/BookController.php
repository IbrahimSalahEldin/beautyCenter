<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
  
    public function index()
    {
        $books = Book::paginate(5);
        return view("books.index" , ['books'=>$books]);
    }

    /**
     * Show the form for creating a new resource.
     */
   
    public function create()
    {
        return view( 'books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        $book_info= request()->all();
        $book = new book();
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
   

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
       
        if ($book) {
            return view("books.show", ['book' => $book]);
        }
        abort(404);
    }
  
       
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        if($book){
            return view('books.edit', ['book' => $book]);
           }else {
              abort(404);
          }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
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
        
      
         


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        if ($book) {
            try {
                unlink(public_path('images/books/'.$book->image));
            } catch (\Throwable $th){}
        }
        $book->delete();
        return back()->with('success', 'Book has been delete successfully');
    }
   
}

    

    /**
     * Show the form for creating a new resource.
     */
   

    /**
     * Store a newly created resource in storage.
     */
   

    /**
     * Display the specified resource.
     */
   
 
    /**
     * Show the form for editing the specified resource.
     */
  

   
   
    /**
     * Remove the specified resource from storage.
     */
   
   

