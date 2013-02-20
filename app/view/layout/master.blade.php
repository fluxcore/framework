<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>

		<title>FluxCore - @yield('title')</title>
		
		<link rel="stylesheet" href="{{ Asset::pub('css/reset.css') }}"/>
		@yield('head')
	</head>
	<body>
		@yield('body')
	</body>
</html>