@extends('app', [
    'title'             => $article->title,
    'metaDescription'   => $article->short_description,
    'ogImage'           => asset('img/'.$article->jumbotron_photo)
    ])

@section('heading')
    @include('partials.header', [
        'background' => '/img/' . $article->jumbotron_photo,
        'title'      => $article->title,
        'subtitle'   => $article->subtitle
    ])
@stop

@section('content')
    @include('articles.partials.admin_tools', ['article' => $article])
    {!! $article->content !!}


    @unless($article->authors->isEmpty())
        <h4 class="page-header">{{ ($article->authors->count() == 1)? 'Author': 'Authors' }}</h4>

        @include('authors.partials.list', ['authors' => $article->authors])
    @endunless

    <hr/>

    <div class="row">
        @if($article->previous)
            <div class="col-lg-6">
                <a class="btn btn-block btn-lg btn-default" href="{{ url_article($article->previous) }}">
                    <h2><span class="glyphicon glyphicon-chevron-left"></span> Previous</h2>
                    <small>{{ str_limit($article->previous->title, 30, "&hellip;") }}</small>
                </a>
            </div>
        @endif

        @if($article->next)
            <div class="col-lg-6">
                <a class="btn btn-block btn-lg btn-primary" href="{{ url_article($article->next) }}">
                    <h2>Next <span class="glyphicon glyphicon-chevron-right"></span></h2>
                    <small>{{ str_limit($article->next->title, 30, "&hellip;") }}</small>
                </a>
            </div>
        @endif
    </div>


@stop