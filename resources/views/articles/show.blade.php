@extends('app', ['title' => $article->title])

@section('heading')
    @include('partials.header', [
        'edit'       => true,
        'background' => '/img/' . $article->jumbotron_photo,
        'title'      => $article->title,
        'subtitle'   => $article->subtitle
    ])
@stop

@section('content')
    {!! $article->content !!}
@stop