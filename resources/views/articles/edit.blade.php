@extends('app', [
    'title'     => 'Edit Article | Buffered Reader',
    'noIndex'   => true,
    'plainNav'  => true
    ])

@section('content-wide')
    <h1 class="page-header">Update the article</h1>
    {!! Form::model($article, ['method' => 'PATCH', 'url' => url_article($article).'/update', 'files' => true]) !!}

        @include('articles.partials.form', ['buttonText' => 'Update'])

    {!! Form::close() !!}
@stop