@extends('app')

@section('heading')
    <div class="jumbotron">
        <div class="container">
            <h1>{{ $article->title}}</h1>
            <p>{{ $article->subtitle or '' }}</p>
        </div>
    </div>
@stop

@section('content')
    <div class="container">
        {!! $article->content !!}
    </div>
@stop