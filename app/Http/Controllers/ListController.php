<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::orderBy('created_at','asc')->paginate(2);
        return view('books.index')->with('books',$books);
    }

    public function show($id)
    {
        $book = Book::find($id);
        return view('books.show')->with('book',$book);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Book = Book::find($id);
        return view('books.edit')->with('book',$Book);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'author' => 'required',
            'price' => 'required',
            'count' => 'required',
            'category' => 'required',
        ]);

        $book = Book::find($id);
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->price = $request->input('price');
        $book->count = $request->input('count');
        $book->category = $request->input('category');
        $book->description = $request->input('description');
        $book -> save();

        return redirect('/books')->with('success', 'Book Updated');
    }
}
