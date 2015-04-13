@extends('app', ['plainNav' => true])

@section('content')
    <h1 class="page-header">Update the article</h1>
    {!! Form::model($article, ['method' => 'PATCH', 'url' => url_article($article).'/update', 'files' => true]) !!}

        @include('articles.partials.form', ['buttonText' => 'Update'])

    {!! Form::close() !!}
@stop