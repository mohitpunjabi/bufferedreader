@extends('app', ['title' => 'Buffered Reader - '.$issue->name])

@section('heading')
    @include('partials.header', [
        'issue'      => true,
        'edit'       => true,
        'pdfLink'    => '#',
        'background' => '/img/' . $issue->jumbotron_photo,
        'title'      => 'Buffered Reader',
        'subtitle'   => $issue->name
    ])
@stop

@section('content')
    @foreach($articles as $article)
        <div class="post-preview @unless($article->published) unpublished @endunless">
            <div class="pull-right">
                @include('articles.partials.admin_tools', ['article' => $article])
            </div>

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