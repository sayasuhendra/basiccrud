@extends('layouts/layout')

@section('main')

<br>
<div class="container">
	<div class="col-md-4 col-md-offset-4"> 
		<form action="{{ route('login.store') }}" method="POST" role="form">
			<legend>Login</legend>

			<div class="form-group">
				<label for="">Username</label>
				<input type="text" class="form-control" id="username" name="username" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Password</label>
				<input type="password" class="form-control" id="password" name="password" placeholder="Input field">
			</div>

			<button type="submit" class="btn btn-primary">Login</button>
		</form>
	</div>
</div>

@stop
