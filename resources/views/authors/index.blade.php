@extends('app', [
    'title'     => 'Authors | Buffered Reader',
    'noIndex'   => true,
    'plainNav'  => true
    ])

@section('content')

    <h1 class="page-header">Create an author</h1>
    {!! Form::open(['route' => 'authors.store', 'files' => true]) !!}

    @include('authors.partials.form', ['buttonText' => 'Create'])

    {!! Form::close() !!}

    @unless($authors->isEmpty())
        <h1 class="page-header">Existing Authors</h1>

        @include('authors.partials.list')
    @endunless
@stop