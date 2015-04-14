@extends('app', [
    'title'             => 'Buffered Reader - '.$issue->name,
    'ogImage'           => asset('img/'.$issue->cover_page)
    ])

@section('heading')
    @include('partials.header', [
        'issue'      => true,
        'edit'       => true,
        'pdfLink'    => $issue->pdf_link,
        'background' => '/img/' . $issue->jumbotron_photo,
        'title'      => 'Buffered Reader',
        'subtitle'   => $issue->name
    ])
@stop

@section('content')
    @foreach($articles as $article)
        <div class="post-preview @unless($article->published) unpublished @endunless" itemscope itemtype="http://schema.org/Article">
            <div class="pull-right">
                @include('articles.partials.admin_tools', ['article' => $article])
            </div>

            <a href="{{ url_article($article) }}" itemprop="url">
                <h2 class="post-title" itemprop="name">{{ $article->title }}</h2>
                <h3 class="post-subtitle">{{ $article->subtitle }}</h3>
            </a>
            <p class="post-meta" itemprop="description">{{ $article->short_description }}</p>
            <link itemprop="image" href="{{ asset('/img/' . $article->jumbotron_photo) }}" />
            <hr/>

        </div>
    @endforeach

    @if(Auth::user())
        <a class="btn btn-lg btn-primary" href="{{ url_issue($issue) . '/articles/create' }}">+ New article</a>
    @endif
@stop