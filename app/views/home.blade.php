@extends('layout.main')

@section('content')
	@if(Auth::check())
		@if(Auth::User()->type == 'admin')
			@include('layout.admin')
		@else
			@include('layout.user')
		@endif
	@else
		@include('layout.landing-page')
	@endif
@stop