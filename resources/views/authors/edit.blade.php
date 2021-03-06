@extends('app', [
    'title'     => 'Authors | Buffered Reader',
    'noIndex'   => true,
    'plainNav'  => true
    ])

@section('content')
    <h1 class="page-header">Update the author</h1>
    {!! Form::model($author, ['method' => 'PATCH', 'route' => ['authors.update', $author->id], 'files' => true]) !!}

        @include('authors.partials.form', ['buttonText' => 'Update'])

    {!! Form::close() !!}
@stop