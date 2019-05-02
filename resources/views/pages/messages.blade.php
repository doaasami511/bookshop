@extends('layouts.app')


@section('content')
<h1>Messages</h1>
<div style="color:black">
    @if(count($messages)>0)
        @foreach($messages as $message)
        <div class="container">
            <ul class="list-group">
                <li class="list-group-item">Name: {{$message->name}}</li>
                <li class="list-group-item">Email: {{$message->email}}</li>
                <li class="list-group-item">Message: {{$message->message}}</li>
                <li class="list-group-item">Time: {{$message->created_at}}</li>

            </ul>
        </div>	
        <br>
        @endforeach
    @endif
</div>
    @endsection

@section('sidebar')
	@parent
	<p>This appended to the sidebar</p>
@endsection