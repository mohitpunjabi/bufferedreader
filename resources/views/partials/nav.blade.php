<nav class="navbar navbar-default navbar-custom navbar-fixed-top @if(isset($plainNav) && $plainNav) plain is-fixed is-visible @endif" itemscope itemtype="http://www.schema.org/SiteNavigationElement">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}" itemprop="url">Buffered Reader</a>
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

                <li class="dropdown">
                    <a href="{{ url('/issues') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Create <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/issues') }}">An issue</a></li>
                            <li><a href="{{ url('/authors') }}">An author</a></li>
                            <li><a href="{{ url('/images') }}">Upload images</a></li>
                    </ul>
                </li>

                <li><a href="https://github.com/mohitpunjabi/bufferedreader/issues" target="_blank">Report a bug</a></li>

            </ul>
        @endunless

            <ul class="nav navbar-nav navbar-right">
                <li itemprop="name"><a href="{{ url('/') }}" itemprop="url">Home</a></li>
                <li itemprop="name"><a href="{{ url('/about') }}" itemprop="url">About</a></li>
                <li class="dropdown">
                    <a href="{{ url('/issues') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Issues <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        @foreach($issues as $issue)
                            <li itemprop="name">{!! link_issue($issue) !!}</li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

@if(isset($plainNav) && $plainNav)
    <br/><br/><br/> <!-- TODO: Stop using BRs -->
@endif