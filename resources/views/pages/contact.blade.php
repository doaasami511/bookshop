@extends('layouts.app')


@section('content')
<div class="container">
<h1>Contact Us</h1>
@if(Session::has('flash_message'))
	<div class="alert alert-success">{{Session::get ('flash_message')}}</div>
@endif
	<form method="post" action="{{route('contact.store')}}">
		{{csrf_field()}}
		<div class="form-group">
			<label>Name:</label>
			<input type-"text" class="form-control" name="name" placeholder='Enter Name'>
			@if($errors->has('name'))
				<small class="form=text invalid-feedback">{{$errors->first('name')}}</small>
			@endif	
		</div>

		<div class="form-group">
			<label>Email:</label>
			<input type-"text" class="form-control" name="email"  placeholder='Enter Email'>
			@if($errors->has('email'))
				<small class="form=text invalid-feedback">{{$errors->first('email')}}</small>
			@endif	
		</div>

		<div class="form-group">
			<label>Message:</label>
			<textarea name="message" class="form-control" placeholder='your message....'></textarea>
			@if($errors->has('message'))
				<small class="form=text invalid-feedback">{{$errors->first('message')}}</small>
			@endif	
		</div>
		<button class="btn btn-primary">submit</button>
	</form>
</div>


@endsection