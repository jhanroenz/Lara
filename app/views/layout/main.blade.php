<!DOCTYPE html>
<html lang="en">
<head>
	{{ HTML::style('css/bootstrap.css') }}
	{{ HTML::style('css/style.css') }}
	{{ HTML::style('css/landing-page.css') }}
	{{ HTML::style('font-awesome/css/font-awesome.css') }}

	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Payment BETA</title>
</head>
<body>
	@include('layout.navigation')


	
	@yield('content')


	
	

@extends('layout.footer')
@include('account.forgot-modal')
</body>
</html>