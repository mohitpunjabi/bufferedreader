@extends('app', ['plainNav' => true])

@section('content')
    <h1 class="page-header">Update the article</h1>
    {!! Form::model($author, ['method' => 'PATCH', 'route' => ['authors.update', $author->id], 'files' => true]) !!}

        @include('authors.partials.form', ['buttonText' => 'Update'])

    {!! Form::close() !!}
@stop