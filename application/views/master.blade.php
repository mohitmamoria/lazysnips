<!doctype html>
<html>
<head>
	<title>LazySnips</title>
	{{ HTML::style('css/vendors/bootstrap.min.css') }}
	{{ HTML::style('css/style.css') }}
	@yield('styles')
</head>
<body>
	<div class="container">
		@yield('main')
	</div>
	@yield('scripts')
</body>
</html>