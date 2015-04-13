@extends('app', ['plainNav' => true])

@section('content')
    @foreach($issues as $issue)
        <div class="col-md-3">
            <img src="{{ asset('img/' . $issue->cover_page) }}" alt="{{ $issue->name }}" class="img-responsive" />
            <h2><a href="{{ url('issues/' . $issue->id) }}">{{ $issue->name }}</a></h2>
            <p>
                <span class="label label-info">{{ $issue->slug }}</span>
            </p>
        </div>
    @endforeach
    <div class="col-md-3">
        <h2><a class="btn btn-primary btn-lg" href="{{ url('issues/create') }}">+ New Issue</a></h2>
    </div>
@stop
