@extends('app', [
    'title'             => $article->title,
    'metaDescription'   => $article->short_description,
    'ogImage'           => asset('img/'.$article->jumbotron_photo),
    'plainNav'          => $article->jumbotron_photo == ''
    ])

@section('heading')
    @include('partials.header', [
        'background' => '/img/' . $article->jumbotron_photo,
        'title'      => $article->title,
        'subtitle'   => $article->subtitle,
        'dark'       => $article->jumbotron_photo == ''
    ])
@stop

@section('meta')
    <meta property="og:type" content="article" />
@stop

@section('content')
    <div itemscope itemtype="http://schema.org/Article">
        <meta itemprop="datePublished" content="{{ $article->updated_at }}"/>
        <meta itemprop="description" content="{{ $article->short_description }}"/>
        <link itemprop="image" href="{{ asset('/img/' . $article->jumbotron_photo) }}" />
        <link itemprop="url" href="{{ url_article($article) }}" />

        @include('articles.partials.admin_tools', ['article' => $article])

        <div itemprop="articleBody">
            {!! $article->content !!}
        </div>

        @unless($article->authors->isEmpty())
            <h4 class="page-header">{{ ($article->authors->count() == 1)? 'Author': 'Authors' }}</h4>

            @include('authors.partials.list', ['authors' => $article->authors])
        @endunless

        <hr/>

        <div class="row">
            <div class="col-lg-6">
                @if($article->previous)
                        <a class="btn btn-block btn-lg btn-default" href="{{ url_article($article->previous) }}">
                            <h2><span class="glyphicon glyphicon-chevron-left"></span> Previous</h2>
                            <small class="truncate">{{ $article->previous->title }}</small>
                        </a>
                @endif
            </div>
            <div class="col-lg-6">
                @if($article->next)
                        <a class="btn btn-block btn-lg btn-primary" href="{{ url_article($article->next) }}">
                            <h2>Next <span class="glyphicon glyphicon-chevron-right"></span></h2>
                            <small class="truncate">{{ $article->next->title }}</small>
                        </a>
                @endif
            </div>
        </div>
    </div>

@stop