<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 





<link rel="stylesheet" href="{{ URL::to('css/BootstrapCSS/bootstrap.min.css') }}">

<link rel="stylesheet" href="{{ URL::to('fontawesome/css/all.css') }}" >

<link rel="stylesheet" href="{{ URL::to('css/app.css') }}" >
<link rel="stylesheet" href="{{ URL::to('css/app.responsive.css') }}" >


	@yield('styles')

 
</head>
<body>


	@yield('header')
	<div class="//container">
	@yield('content')
	</div>


	 

	<script src="{{ URL::to('js/jquery-3.3.1.min.js') }}"></script>

	<script src="{{ URL::to('js/BootstrapJS/bootstrap.min.js') }}"></script>

	@yield('scripts')
</body>
</html>