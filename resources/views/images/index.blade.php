@extends('app', ['title' => 'All Images | Buffered Reader', 'plainNav' => true])

@section('content')

    <h1 class="page-header">Upload an image</h1>
    {!! Form::open(['url' => 'images/store', 'files' => true]) !!}

    <div>
        {!! Form::label('image', 'Upload an image') !!}
        <div class="input-group">
            {!! Form::file('image', ['required' => 'required', 'accept' => 'image/*']) !!}

            <div class="input-group-btn">
                <button class="btn btn-primary" type="submit">Upload</button>
            </div>
        </div>
        <label class="help-block"></label>
        @if($errors->first('image')) <div class="alert alert-danger">{{ $errors->first('image') }}</div> @endif
            @if(Session::has('image_path')) <div class="alert alert-success">Image uploaded to <a href="{{ asset(Session::get('image_path')) }}">{{ Session::get('image_path') }}</a> </div> @endif
    </div>

    {!! Form::close() !!}

    <h1 class="page-header">Existing images</h1>

    @foreach($images as $image)
        <a href="{{ asset($image) }}"><img src="{{ asset($image) }}" height="50" /></a>
    @endforeach
@stop@stop