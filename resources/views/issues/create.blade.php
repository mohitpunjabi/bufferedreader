@extends('app', [
    'title'     => 'Create Issue | Buffered Reader',
    'noIndex'   => true,
    'plainNav'  => true
    ])

@section('content')
    <h1 class="page-header">Create an article</h1>

    {!! Form::open(['route' => 'issues.store', 'files' => true]) !!}

        @include('issues.partials.form', ['buttonText' => 'Create'])

    {!! Form::close() !!}
@stop