<?php

namespace App\Http\Controllers;

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
        $claints = claint::paginate(5);

        // Get all book IDs associated with claints
        $bookIds = $claints->pluck('book_id');
    
        // Retrieve all books using the IDs
        $books = Book::whereIn('id', $bookIds)->get();
    
        return view("claints.index", ['claints' => $claints, 'books' => $books]);
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

    public function store(StoreclaintRequest $request)
    {
        $clinte_info= request()->all();
        $clinte = new claint();
        $clinte->book_id= $clinte_info['book_id'];
        $clinte->name= $clinte_info['name'];
        $clinte->email= $clinte_info['email'];
        $clinte->save();
        return to_route("claint.index");
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

    /**
     * Update the specified resource in storage.
     */

    public function update(UpdateclaintRequest $request, claint $claint)
    {
        $claint_info= request()->all();
        $claint->book_id= $claint_info['book_id'];
        $claint->name= $claint_info['name'];
        $claint->email= $claint_info['email'];
        $claint->save();
        return to_route("claint.index");
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
