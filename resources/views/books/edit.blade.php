@extends('layouts.app')

@section('content')
    <h1><u>Update {{$book->title}}:</u></h1>
    {!! Form::open(['action' => ['PostController@update', $book->id], 'method'=> 'POST' ]) !!}
        <div style="float:left;padding-right:6px;">
            <p style="padding-top:6px;">{{Form::label('title', 'Title')}}:</p>
            <p style="padding-top:6px;">{{Form::label('author', 'Author')}}:</p>
            <p style="padding-top:6px;">{{Form::label('price', 'Price')}}:</p>
            <p style="padding-top:6px;">{{Form::label('count', 'Count')}}:</p>
            <p style="padding-top:6px;">{{Form::label('category', 'Category')}}:</p>
            <p style="padding-top:6px;">{{Form::label('description', 'Description')}}:</p>
        </div>
        <div>
            <p>{{Form::text('title', $book->title, ['class' => 'form-control', 'placeholder' => 'Title', 'style'=>'width:50%;'])}}</p>
            <p>{{Form::text('author', $book->author, ['class' => 'form-control', 'placeholder' => 'Author', 'style'=>'width:50%;'])}}</p>
            <p>{{Form::text('price', $book->price, ['class' => 'form-control', 'placeholder' => 'Price', 'style'=>'width:50%;'])}}</p>
            <p>{{Form::text('count', $book->count, ['class' => 'form-control', 'placeholder' => 'Count', 'style'=>'width:50%;'])}}</p>
            <p>{{Form::text('category', $book->category, ['class' => 'form-control', 'placeholder' => 'Category', 'style'=>'width:50%;'])}}</p>
            <p style="clear:both">{{Form::textarea('description', $book->description, ['id'=>'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description', 'style'=>'width:50%;'])}}</p>
        </div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Update', ['class'=>'btn btn-primary', 'style'=>'float:right'])}}
    {!! Form::close() !!}
    <a href="/books" class="btn btn-default" style="border: solid 1px;">Go Back</a>
@endsection