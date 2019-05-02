@extends('layouts.app')

@section('content')

<table style="width:100%">
    <td><h1 style="text-decoration:underline;">Books list :</h1></td>

    {!! Form::open(['action' => ['PostController@search'], 'method'=> 'POST' ]) !!}

    <td style="float:right;margin-top:1%;"><table>
        <tr style="margin:0px;">
            <td style="margin:0px;">{{Form::label('title', 'Title',['style'=>'margin-top:10%'])}}:</td>
            <td style="margin:0px;">{{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Book title here'])}}</td>
            <td style="margin:0px;">{{Form::label('author', 'Author',['style'=>'margin-top:10%'])}}:</td>
            <td style="margin:0px;">{{Form::text('author', '', ['class' => 'form-control', 'placeholder' => 'Author'])}}</td>
            
            <td style="margin:0px;">{{Form::submit('Search', ['class'=>'btn btn-primary','style'=>'margin:0px;'])}}</td>
        <tr>
    </table></td>
</table>


{!! Form::close() !!}
<br>
@if(isset(Auth::user()->name))
    @if(Auth::user()->name=='John Magdy')
        <a href="/books/create" style="float:right;color:white; border:solid 1px white;padding:5px;">Add new book</a>
    @endif
@endif
<div style="margin:1% 5% 0% 5%;border:solid 1px black;border-radius:7px;padding:5px;background-color:#e5e9ea;width:65%">
@if(count($books)>0)
    @foreach ($books as $book)
    <h3 style="margin:1%;color:black;"><a href="/books/{{$book->id}}">{{$book->title}}</a><b style="float:right;">Price: {{$book->price}}$</b></h3>
    <h4 style="padding-right:2%;"><a href="/mycart" class="btn btn-primary" style="float:right;"> Add to cart </a></h4>
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
    <p style="color:black;">No books at this moment.</p>
@endif
</div>
<br>

@endsection