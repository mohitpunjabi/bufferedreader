@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($issues as $issue)
                <div class="col-md-3">
                    <img src="{{ asset('img/' . $issue->cover_page) }}" alt="{{ $issue->name }}" class="img-responsive" />
                    <h2><a href="{{ url('issues/' . $issue->id) }}">{{ $issue->name }}</a></h2>
                    <p>
                        <span class="label label-info">{{ $issue->slug }}</span>
                    </p>
                </div>
            @endforeach
        </div>
    </div>
@stop