@extends('app')

@section('content')

    <div class="jumbotron">
        <div class="container">
            <h1>Buffered Reader</h1>
            <p>{{ $issue->name }}</p>
        </div>
    </div>


    <div class="container">
        <div class="row">


            <div class="col-md-3">
                <img src="{{ asset('img/' . $issue->cover_page) }}" alt="{{ $issue->name }}" class="img-responsive" />
                <h2><a href="{{ url('issues/' . $issue->id) }}">{{ $issue->name }}</a></h2>
                <p>
                    <span class="label label-info">{{ $issue->slug }}</span>
                </p>
            </div>
        </div>
    </div>
@stop