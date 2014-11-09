<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>aPad.in</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	{{ HTML::style('css/bootstrap.css') }}
	{{-- HTML::style('css/bootstrap-theme.css') --}}
	{{ HTML::style('css/animate.css') }}
	{{ HTML::style('css/dashboard.css') }}
	{{ HTML::style('css/apadin.css') }}
	{{ HTML::style('css/flatly.css') }}
	{{ HTML::style('css/font-awesome.css') }}
</head>
<body>
@include('layouts.nav')

@yield('content')

{{ HTML::script('js/jquery-2.1.1.min.js') }}
{{ HTML::script('js/bootstrap.js') }}
{{ HTML::script('js/docs.min.js') }}
</body>
</html>
