@extends('layout.main')

@section('content')

	<form action="{{ URL::route('account-create-post')}}" method="POST">
		<div class="field row">
			<div class="col-xs-4">
				<input class="form-control" placeholder="Email" type="text" name="email" {{ e(Input::old('email')) ? ' value ="' . Input::old('email') . '"' : '' }}>
				@if($errors->has('email'))
					{{ $errors->first('email') }}
				@endif
			</div>
		</div>
		<div class="field row">
			<div class="col-xs-4">		
				<input class="form-control" placeholder="Username" type="text" name="username">
				@if($errors->has('username'))
					{{ $errors->first('username') }}
				@endif
			</div>
		</div>
		<div class="field row">
			<div class="col-xs-4">
				<input class="form-control" placeholder="Password" type="password" name="password">
				@if($errors->has('password'))
					{{ $errors->first('password') }}
				@endif
			</div>
		</div>
		<div class="field row">
			<div class="col-xs-4">
				<input class="form-control" placeholder="Password Again" type="password" name="password_again">
				@if($errors->has('password_again'))
					{{ $errors->first('password_again') }}
				@endif
			</div>
		</div>
		<div class="field row">
			<div class="col-xs-4">		
				<input class="form-control" placeholder="Firstname" type="text" name="firstname">
				@if($errors->has('firstname'))
					{{ $errors->first('firstname') }}
				@endif
			</div>
		</div>
		<div class="field row">
			<div class="col-xs-4">		
				<input class="form-control" placeholder="Middle Name" type="text" name="middlename">
				@if($errors->has('middlename'))
					{{ $errors->first('middlename') }}
				@endif
			</div>
		</div>
		<div class="field row">
			<div class="col-xs-4">		
				<input class="form-control" placeholder="Lastname" type="text" name="lastname">
				@if($errors->has('lastname'))
					{{ $errors->first('lastname') }}
				@endif
			</div>
		</div>
		<small>Note: </small><small style="color:red">*all fields are required</small>
		<div class="field button row">
			<input class="btn btn-success" type="submit" value="Create account">
			{{ Form::token()}}
		</div>
	</form>
@stop

@extends('layout.footer')