<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class PostController extends Controller
{
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);
        $book -> delete();

        return redirect('/books')->with('success', 'Book Deleted');
    }
}
