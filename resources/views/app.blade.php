<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ $title or 'Buffered Reader' }}</title>

    @include('meta')
</head>
<body>
    @include('nav')

    @yield('heading', '<br><br><br><br>')
	@yield('content')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
