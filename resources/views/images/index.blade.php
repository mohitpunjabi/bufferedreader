@extends('app', [
    'title'     => 'All Images | Buffered Reader',
    'noIndex'   => true,
    'plainNav'  => true
    ])

@section('content')

    <h1 class="page-header">Upload an image</h1>
    {!! Form::open(['url' => 'images/store', 'files' => true]) !!}

    <div class="row">
        <div class="col-md-4">
            {!! Form::file('image', ['class' => 'form-control', 'required' => 'required', 'accept' => 'image/*']) !!}
        </div>

        <div class="col-md-6">
            {!! Form::select('tag_list[]', $tags, null, ['class' => 'form-control tag-list', 'multiple' => 'multiple', 'id' => 'tag_list']) !!}
        </div>

        <div class="col-md-2">
            <button class="btn btn-block btn-primary" type="submit">Upload</button>
        </div>

        @if($errors->first('image')) <div class="alert alert-danger">{{ $errors->first('image') }}</div> @endif
        @if(Session::has('image_path')) <div class="alert alert-success">Image uploaded to <a href="{{ asset(Session::get('image_path')) }}">{{ Session::get('image_path') }}</a> </div> @endif
    </div>

    {!! Form::close() !!}

    <h1 class="page-header">Existing images</h1>
        {!! Form::open(['url' => 'images', 'method' => 'get']) !!}
        <div class="input-group">
            {!! Form::select('tag_filter_list[]', $tags, $filteredTags, ['class' => 'form-control', 'multiple' => 'multiple', 'id' => 'tag_filter_list']) !!}
            <span class="input-group-btn">
                <button class="btn btn-default" type="submit">Filter</button>
            </span>
        </div>
        {!! Form::close() !!}

    @foreach($images as $image)
        <a href="{{ asset($image->path) }}"><img src="{{ asset($image->thumbnail) }}" height="50" /></a>
    @endforeach
@stop