@extends('app', ['plainNav' => true])

@section('content')
    <h1 class="page-header">Create an article</h1>

    {!! Form::open(['route' => 'issues.store', 'files' => true]) !!}

    <div>
        {!! Form::label('name', 'Issue Name') !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Issue Name']) !!}
        <label class="help-block">Name of the issue. Eg: <i>August 2014</i>, <i>March 2015</i></label>
        @if($errors->first('name')) <div class="alert alert-danger">{{ $errors->first('name') }}</div> @endif
    </div>

    <div>
        {!! Form::label('cover_page', 'Front cover page') !!}
        {!! Form::file('cover_page', null, ['class' => 'form-control', 'placeholder' => 'Front cover page', 'accept' => 'image/*']) !!}
        <label class="help-block">Upload a JPEG for the front cover. </label>
        @if($errors->first('cover_page')) <div class="alert alert-danger">{{ $errors->first('cover_page') }}</div> @endif
    </div>

    <div>
        {!! Form::label('jumbotron_photo', 'A photo representing this issue') !!}
        {!! Form::file('jumbotron_photo', null, ['class' => 'form-control', 'placeholder' => 'A photo representing this issue', 'accept' => 'image/*']) !!}
        <label class="help-block">This photo appears on the homepage.</label>
        @if($errors->first('jumbotron_photo')) <div class="alert alert-danger">{{ $errors->first('jumbotron_photo') }}</div> @endif
    </div>

    <div>
        <button class="btn btn-block btn-primary" type="submit">Create</button>
    </div>

    {!! Form::close() !!}
@stop