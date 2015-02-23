<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('meta-title', 'Basic Crud')</title>

	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
</head>
<body>
	@include('layouts/menu')

	@yield('main')
	
</body>
</html>