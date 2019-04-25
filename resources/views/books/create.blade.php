@extends('layouts.app')

@section('content')
@if(isset(Auth::user()->name))
    @if(Auth::user()->name=='John Magdy')
        <h1><u>Add a Book:</u></h1>
        
        {!! Form::open(['action' => 'PostController@store', 'method'=> 'POST' ]) !!}
        
            <div style="float:left;padding-right:6px;">
                <p style="padding-top:6px;">{{Form::label('title', 'Title')}}:</p>
                <p style="padding-top:6px;">{{Form::label('author', 'Author')}}:</p>
                <p style="padding-top:6px;">{{Form::label('price', 'Price')}}:</p>
                <p style="padding-top:6px;">{{Form::label('count', 'Count')}}:</p>
                <p style="padding-top:6px;">{{Form::label('category', 'Category')}}:</p>
                <p style="padding-top:6px;">{{Form::label('description', 'Description')}}:</p>
            </div>

            <div>
                <p>{{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title', 'style'=>'width:50%;'])}}</p>
                <p>{{Form::text('author', '', ['class' => 'form-control', 'placeholder' => 'Author', 'style'=>'width:50%;'])}}</p>
                <p>{{Form::text('price', '', ['class' => 'form-control', 'placeholder' => 'Price', 'style'=>'width:50%;'])}}</p>
                <p>{{Form::text('count', '', ['class' => 'form-control', 'placeholder' => 'Count', 'style'=>'width:50%;'])}}</p>
                <p>{{Form::text('category', '', ['class' => 'form-control', 'placeholder' => 'Category', 'style'=>'width:50%;'])}}</p>
                <p style="clear:both">{{Form::textarea('description', '', ['id'=>'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description', 'style'=>'width:50%;'])}}</p>
            </div>

        {{Form::submit('Submit', ['class'=>'btn btn-primary', 'style'=>'float:right'])}}
        {!! Form::close() !!}
        <a href="/books" class="btn btn-default" style="border: solid 1px;color:white;">Go Back</a>
    @else
        <p>You are not authorized to see this web page</p>
        <input type="button" onclick="javascript:history.go(-1)" value="Go back">
    @endif
@else
    <p>You are not authorized to see this web page</p>
    <input type="button" onclick="javascript:history.go(-1)" value="Go back">
@endif

@endsection