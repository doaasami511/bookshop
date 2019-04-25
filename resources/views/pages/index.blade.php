@extends('layouts.app')

@section('content')
    <h1>Welcome to Booksy</h1>

    <div style="margin-left:20px;">
        <h3>Booksy is a web site that sells books for a very good prices</h3>
        <br>
        <a href="books"> <button class="rounded" style="width:100%;height:70px;background-color:yellow;padding:12px;border:none;font-weight:bold;"> Find any book you want </button> </a>
        <p style="text-align:center;margin:2%;">OR</p>
        <a href="request"> <button class="rounded" style="width:100%;height:70px;background-color:blue;padding:12px;border:none;color:white;font-weight:bold;"> Request for a book </button> </a>
    </div>
    
@endsection