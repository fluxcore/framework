<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<title>FluxCore - Debug - @yield('title')</title>

		<link rel="stylesheet" href="{{ Asset::pub('fluxcore/css/reset.css') }}"/>
		<link rel="stylesheet" href="{{ Asset::pub('fluxcore/css/debug.css') }}"/>
	</head>

	<body>
		<div id="debug">
			@yield('content')
		</div>
	</body>
</html>