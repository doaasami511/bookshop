<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class AddController extends Controller
{
    /**
     *
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'author' => 'required',
            'price' => 'required',
            'count' => 'required',
            'category' => 'required',
        ]);

        $book = new Book;
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->price = $request->input('price');
        $book->count = $request->input('count');
        $book->category = $request->input('category');
        $book->description = $request->input('description');
        $book -> save();

        return redirect('/books')->with('success', 'Book Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    
    
}
