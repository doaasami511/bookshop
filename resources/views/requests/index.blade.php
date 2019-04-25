@extends('layouts.app')

@section('content')
    <h1>Requested Books information :</h1>
    @if(count($requests) > 1)
        @foreach ($requests as $request)
            <div style="background-color:white;color:black;padding:1%;border-radius:20px;border:solid 2px;">
                <h3>Book's id : {{$request->id}}</h3>
                <h3 style="margin-left:2%;">Title : <span style="color:blue">{{$request->title}}</span> </h3>
                <h3 style="margin-left:2%;">Auther : <span style="color:blue">{{$request->auther}}</span> </h3>
                <h3 style="margin-left:2%;">Book version : <span style="color:blue">{{$request->version}}</span> </h3>
                <h3 style="margin-left:2%;">Requested by: <span style="color:blue">{{$request->requestedby}}</span> </h3>
            </div>
            <br>
        @endforeach
    @else
        <p>No requests found.</p>
    @endif
    <h3><a href="/submitrequest" style="background-color:black;text-decoration:none;color:white;padding:0.5%;border-radius:8px;float:right">Submit a request</a></h3>
@endsection