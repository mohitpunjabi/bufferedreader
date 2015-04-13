<nav class="navbar navbar-default navbar-custom navbar-fixed-top @if(isset($plainNav)) plain is-fixed is-visible @endif">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">Buffered Reader</a>
        </div>

        <div class="collapse navbar-collapse" id="navbar">
        @unless(Auth::guest())
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            @endunless

            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/about') }}">About</a></li>
                <li class="dropdown">
                    <a href="{{ url('/issues') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Issues <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        @foreach(App\Issue::all() as $issue)
                            <li><a href="{{ url('/issues/' . $issue->id) }}">{{ $issue->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

@if(isset($plainNav))
    <br/><br/><br/> <!-- TODO: Stop using BRs -->
@endif