@extends('layouts.app')

@section('content')
<h1 style="text-decoration:underline;">Books list:</h1>
<a href="/books/create" style="float:right;color:white; border:solid 1px white;padding:5px;">Add new book</a>
<div style="margin:1% 5% 0% 5%;border:solid 1px black;border-radius:7px;padding:5px;background-color:#e5e9ea;width:65%">
@if(count($books)>0)
    @foreach ($books as $book)
    <h3 style="margin:0%;color:black;"><a href="/books/{{$book->id}}">{{$book->title}}</a><b style="float:right;">Price: {{$book->price}}$</b></h3>
        <div style="margin-left:2%;">
            <small style="color:black;">
                Author: {{$book->author}}
                <br>
                Added At: {{$book->created_at}}
            </small>
        </div>
        <hr>
    @endforeach
    {{$books->links()}}
@else
    <p>No books at this moment.</p>
@endif
</div>
<br>

@endsection