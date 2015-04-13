@extends('app', ['plainNav' => true])

@section('content')
    @foreach($issues as $issue)
        <div class="col-md-3">
            <img src="{{ asset('img/' . $issue->cover_page) }}" alt="{{ $issue->name }}" class="img-responsive" />
            <h3>{!! link_issue($issue) !!}</h3>
        </div>
    @endforeach
    <div class="col-md-3">
        <h2><a class="btn btn-primary btn-lg" href="{{ url('issues/create') }}">+ New Issue</a></h2>
    </div>
@stop
