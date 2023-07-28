<?php

namespace App\Http\Controllers;

use App\Models\M_book;
use App\Http\Requests\StoreM_bookRequest;
use App\Http\Requests\UpdateM_bookRequest;

class MBookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = M_book::paginate(5);
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
    public function store(StoreM_bookRequest $request)
    {
        $book_info= request()->all();
        $book = new M_book();
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
    public function show(M_book $m_book)
    {
        return view("books.show", ['book' => $m_book]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(M_book $m_book)
    {
        // $book = M_book::where('id', $id)->first();
        // dd($book);
         return view('books.edit', ['book' => $m_book]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateM_bookRequest $request, M_book $m_book)
    {
        dd($request);
        $book_info= request()->all();
        // $m_book = M_book::where('id', $id)->first();
       
        $img =request()->image;
        if($img){
            if($m_book->image && (public_path('images/books/' . $m_book->image))){
                unlink(public_path('images/books/' . $m_book->image));
            }
            $img_name = time().'.' .$img->extension();
            $m_book->image = $img_name;
            $img->move(public_path('images/books'), $img_name);
        }
        $m_book->title= $book_info['title'];
        $m_book->price= $book_info['price'];
        $m_book->description = $book_info['description'];
        
      
        $m_book->save();

        return to_route("book.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(M_book $m_book)
    {
        if($m_book->image){
            try {
                unlink(public_path('images/books/'.$m_book->image));
            } catch (\Throwable $th){}
        }
        $m_book->delete();
        return back()->with('success', 'Book has been delete successfully');
    }
}

