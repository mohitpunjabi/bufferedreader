@extends('app', ['title' => 'Hello'])

@section('heading')
    @include('partials.header', [
        'background' => '/img/' . $issue->jumbotron_photo,
        'title'      => 'Buffered Reader',
        'subtitle'   => $issue->name
    ])
@stop

@section('content')
    <ul class="list-unstyled">
        @foreach($issue->articles as $article)
            <li>
                <h2><a href="{{ route('articles.show', $article->id) }}">{{ $article->title }} <small>{{ $article->subtitle }}</small></a></h2>
                <p>Last edited {{ $article->updated_at->diffForHumans() }}</p>
            </li>
        @endforeach

        @if(Auth::user())
            <li>
                <h2><a class="btn btn-lg btn-primary" href="{{ route('articles.create') }}">+ New article</a></h2>
            </li>
        @endif
    </ul>
@stop