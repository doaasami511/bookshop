@extends('layouts.app')

@section('content')
@if(isset(Auth::user()->name))
    <h3>Submit a book request:</h3>

    {!! Form::open(['action' => 'RequestsController@store', 'method'=> 'POST' ]) !!}

    <div style="float:left;padding-right:6px;">
        <p style="padding-top:6px;">{{Form::label('title', 'Title')}}:</p>
        <p style="padding-top:6px;">{{Form::label('author', 'Author')}}:</p>
        <p style="padding-top:6px;">{{Form::label('requestedby', 'Requested by')}}:</p>
    </div>

    <div>
        <p>{{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title', 'style'=>'width:50%;'])}}</p>
        <p>{{Form::text('auther', '', ['class' => 'form-control', 'placeholder' => 'Author', 'style'=>'width:50%;'])}}</p>
        <p>{{Form::text('', Auth::user()->name, ['class' => 'form-control', 'style'=>'width:50%;', 'disabled'=>'true'])}}</p>
        <p>{{Form::text('requestedby', Auth::user()->name, ['class' => 'form-control', 'style'=>'width:50%;visibility: hidden;'])}}</p>
    </div>

    {{Form::submit('Submit', ['class'=>'btn btn-primary', 'style'=>'float:right'])}}
    {!! Form::close() !!}
    <a href="/request" class="btn btn-default" style="border: solid 1px;color:white;">Go Back</a>

@else
    <h3>You are not allowed to see this page</h3>
@endif
@endsection