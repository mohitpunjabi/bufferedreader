@extends('app', ['title' => $article->title])

@section('heading')
    @include('partials.header', [
        'background' => '/img/' . $article->jumbotron_photo,
        'title'      => $article->title,
        'subtitle'   => $article->subtitle
    ])
@stop

@section('content')
    @include('articles.partials.admin_tools', ['article' => $article])
    {!! $article->content !!}


    @unless($article->authors->isEmpty())
        <h4 class="page-header">{{ ($article->authors->count() == 1)? 'Author': 'Authors' }}</h4>

        @include('authors.partials.list', ['authors' => $article->authors])
    @endunless

@stop