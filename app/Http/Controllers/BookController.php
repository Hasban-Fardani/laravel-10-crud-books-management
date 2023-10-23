<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return list of all books
        return view("book.index", ["books" => Book::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view create books
        return view("book.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Book::create($request->all());
        return redirect()->back()->with("success","success add new book");
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
        return view('book.show', ['book'=> $book]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
        return view('book.edit', ["book" => $book]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //
        $book->update($request->all());
        return redirect()->back()->with('success','Success edit book');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
        $book->delete();
        return redirect()->back()->with("success", "success deleting book");
    }
}
