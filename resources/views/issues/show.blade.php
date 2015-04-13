@extends('app', ['title' => 'Hello'])

@section('heading')
    @include('partials.header', [
        'background' => '/img/' . $issue->jumbotron_photo,
        'title'      => 'Buffered Reader',
        'subtitle'   => $issue->name
    ])
@stop

@section('content')
    @foreach($issue->articles as $article)
        <div class="post-preview">
            <a href="{{ url_article($article) }}">
                <h2 class="post-title">{{ $article->title }}</h2>
                <h3 class="post-subtitle">{{ $article->subtitle }}</h3>
            </a>
            <p class="post-meta">Last edited {{ $article->updated_at->diffForHumans() }}</p>
        </div>
    @endforeach

    @if(Auth::user())
        <a class="btn btn-lg btn-primary" href="{{ url_issue($issue) . '/articles/create' }}">+ New article</a>
    @endif
@stop