@extends('layouts.app')
@section('content')
<div style="width:75%;">
<div style="border:solid 1px;padding:1%;background:#e5e9ea;color:black;border-radius:10px;">
    <h1 style="display:inline">{{$book->title}}:</h1>
    <div style="float:right;padding:0% 2%;">
        <p style="text-align:right;">Book ID : <b>{{$book->id}}</b></p>
        @if($book->count >= 1)
        <p style="text-align:right;">
            <a style="padding:5px;text-decoration:none;border-radius: 6px;border:solid 1px black;color:black;text-align:center;display:inline-block;background-color:#d8f2c9;" href="">
                Buy Now
                <br>
                {{$book->price}} $
            </a>
        </p>
        @endif
        @if($book->count > 1)
            <p style="text-align:right;">There are {{$book->count}} left</p>
        @else
            @if($book->count == 0)
                <p style="background-color:red;color:white;padding:5px;">There are no books left</p>
            @else
                <p style="text-align:right;">There is {{$book->count}} left</p>
            @endif
        @endif
    </div>
    <p style="word-wrap: break-word;margin-left:2%;">{!!$book->description!!}</p>
    <p>Catigory: {{$book->category}}.</p>
    <small>Made by: {{$book->author}}.</small>
    <hr>
</div>
<br>
<a href="/books" class="btn btn-default" style="border:solid 1px;color:white">Go Back</a>
<a href="/books/{{$book->id}}/edit" class="btn btn-default" style="border:solid 1px;color:white;">Edit this book</a>
{!!Form::open(['action' => ['PostController@destroy', $book->id],'method'=>'POST', 'style' => 'float:right'])!!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
{!!Form::close()!!}
</div>
@endsection