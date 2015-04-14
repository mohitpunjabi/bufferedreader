@extends('app', [
    'title'             => 'About us | Buffered Reader',
    ])

@section('heading')
    @include('partials.header', [
        'background' => '/img/',
        'title'      => 'About us | Buffered Reader',
    ])
@stop

@section('content')
    <h2 class="section-heading">About us</h2>
@stop