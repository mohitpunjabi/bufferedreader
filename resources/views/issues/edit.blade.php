@extends('app', ['plainNav' => true])

@section('content')
    <h1 class="page-header">Create an article</h1>

    {!! Form::model($issue, ['method' => 'PATCH', 'url' => url_issue($issue).'/update', 'files' => true]) !!}

        @include('issues.partials.form', ['buttonText' => 'Update'])

    {!! Form::close() !!}
@stop