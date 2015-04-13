@extends('app', ['plainNav' => true])

@section('content')
    <h1 class="page-header">Create an article</h1>
    {!! Form::open(['url' => url_issue($issue).'/articles/store', 'files' => true]) !!}

    @include('articles.partials.form', ['buttonText' => 'Create'])

    {!! Form::close() !!}
@stop