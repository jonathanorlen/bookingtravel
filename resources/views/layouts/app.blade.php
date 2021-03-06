<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	@stack('prepend-style')
	@include('includes.style')
	@stack('addon-style')
</head>
<body>
	<!-- Navbar -->
	@include('includes.navbar')
     
	@yield('content')
	
	@include('includes/footer')
	
	@stack('prepend-script')

	@include('includes.script')

	@stack('addon-script')
	
</body>
</html>