<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ $title or 'Buffered Reader' }}</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $metaDescription or 'Buffered Reader is the biannual magazine of Department of Computer Science and Engineering, Indian School of Mines, Dhanbad.' }}" />
    <meta name="revisit-after" content="2 days">
    <meta name="language" content="english" />
    <meta name="robots" content="{{ (isset($noIndex))? 'noindex, nofollow': 'index, follow'  }}" />
    <meta name="author" content="{{ $author or 'Buffered Reader' }}" />
    <meta property="og:image" content="{{ $ogImage or '' }}"/>
    <meta property="og:title" content="{{ $title or 'Buffered Reader' }}" />
    <meta property="og:description" content="{{ $metaDescription or 'Buffered Reader is the biannual magazine of Department of Computer Science and Engineering, Indian School of Mines, Dhanbad.' }}" />
    <meta property="og:url" content="{{ Request::url() }}"/>
    <meta property="og:site_name" content="Buffered Reader"/>


    <link rel="icon" type="image/ico" href="{{ asset('favicon.png') }}" />

    <link href="{{ elixir('css/app.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    @yield('meta', '')
</head>
<body>
    @include('partials.nav')

    @yield('heading', '')

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                @yield('content')
            </div>
        </div>
    </div>
    @include('partials.footer')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="{{ elixir('js/app.js') }}"></script>

</body>
</html>