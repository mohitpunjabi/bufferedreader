@extends('app', [
    'title'             => $article->title . ' - Buffered Reader, ' . $article->issue->name,
    'metaDescription'   => $article->short_description,
    'ogImage'           => $article->ogImage,
    'plainNav'          => !$article->hasBackground
    ])

@section('heading')
    @include('partials.header', [
        'background' => '/img/' . $article->jumbotron_photo,
        'title'      => $article->title,
        'subtitle'   => $article->subtitle,
        'dark'       => !$article->hasBackground
    ])
@stop

@section('meta')
    <meta property="og:type" content="article" />
    <meta property="article:section" content="{{ $article->issue->name }}" />
    @foreach($article->seeAlso as $also)
        <meta property="og:see_also" content="{{ url_article($also) }}" />
    @endforeach
@stop

@section('content')
    <div itemscope itemtype="http://schema.org/Article">
        <meta itemprop="datePublished" content="{{ $article->updated_at }}"/>
        <meta itemprop="description" content="{{ $article->short_description }}"/>
        <meta itemprop="articleSection" content="{{ $article->issue->name }}" />
        @unless($article->jumbotron_photo == '')
            <link itemprop="image" href="{{ asset('/img/' . $article->jumbotron_photo) }}" />
            <link itemprop="thumbnailUrl" href="{{ asset('/img/' . $article->jumbotron_photo) }}" />
        @endunless
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
