@extends('app', ['title' => 'Hello'])

@section('heading')
    <div class="jumbotron">
        <div class="container">
            <h1>Buffered Reader</h1>
            <p>{{ $issue->name }}</p>
        </div>
    </div>
@stop

@section('content')
    <div class="container">

        <ul>
            @foreach($issue->articles as $article)
                <li>
                    <h2><a href="{{ route('articles.show', $article->id) }}">{{ $article->title }} <small>{{ $article->subtitle }}</small></a></h2>
                    <p>Published {{ $article->updated_at->diffForHumans() }}</p>
                </li>
            @endforeach

            <li>
                <h2><a href="{{ route('articles.create') }}">Create new article</a></h2>
            </li>
        </ul>
    </div>
@stop