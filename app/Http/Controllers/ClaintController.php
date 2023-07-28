<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Book;
use App\Models\claint;
use App\Http\Requests\StoreclaintRequest;
use App\Http\Requests\UpdateclaintRequest;

class ClaintController extends Controller
{

    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $claints = claint::with('books')->paginate(5);

       
        return view("claints.index", ['claints' => $claints]);
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        return view('claints.create');
    }

    /**
     * Store a newly created resource in storage.
     */

     
     
     public function store(Request $request)
     {
        
         $request->validate([
             'name' => 'required|string',
             'email' => 'required|email',
             'book_id' => 'required|exists:books,id', 
         ]);
     
         // Create the new client
         $client = claint::create([
             'name' => $request->name,
             'email' => $request->email,
         ]);
     
         // Get the book based on the input book_id
         $book = Book::find($request->book_id);
     
         // Associate the book with the client
         $client->books()->attach($book->id);
     
         
         return redirect()->route('claint.index')->with('success', 'Client created successfully.');
     }
     
    /**
     * Display the specified resource.
     */

    public function show(claint $claint)
    {
        return view("claints.show", ['claint' => $claint]);
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(claint $claint)
    {
       
        return view('claints.edit', ['claint' => $claint]);
    }

    
    
public function update(Request $request, claint $client)
{
    // Validate the request data
   
    $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        'book_id' => 'required|exists:books,id', // Ensure the book_id exists in the books table
    ]);
    

    // Update the client's details
    $client->update([
        'name' => $request->name,
        'email' => $request->email,
    ]);
  
    
    $book = Book::find($request->book_id);

    
    $client->books()->sync([$book->id]);
   
    return redirect()->route('claint.index')->with('success', 'Client updated successfully.');
}







    /**
     * Remove the specified resource from storage.
     */

    public function destroy(claint $claint)
    {   
        $claint->delete();
        return back()->with('success', 'Claint has been delete successfully');
    }
}
