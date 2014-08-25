@extends('layout.main')

@section('content')
	<form action=" {{ URL::route('account-change-password-post') }}" method="post">
		<div class="field row" >
			<div class="col-xs-4">
				<input class="form-control" type="password" name="old_password" placeholder="Old Password" required>
				@if($errors->has('old_password'))
					{{ $errors->first('old_password') }}
				@endif
			</div>
		</div>
		<div class="field row" >
			<div class="col-xs-4">
				<input class="form-control" type="password" name="password" placeholder="New Password" required>
				@if($errors->has('password'))
					{{ $errors->first('password') }}
				@endif				
			</div>
		</div>
		<div class="field row" >
			<div class="col-xs-4">			
				<input class="form-control" type="password" name="password_again" placeholder="New password again" required>
				@if($errors->has('password_again'))
					{{ $errors->first('password_again') }}
				@endif	
			</div>
		</div>
			<small style="color:red">*all fields are required</small>
		<div class="field row">
			<input class="btn btn-info" type="submit" value="Change password">
		</div>
		{{ Form::token() }}
	</form>
@stop