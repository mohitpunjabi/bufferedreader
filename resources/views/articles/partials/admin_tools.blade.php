@if(Auth::user())
    <div class="text-center">
        <a class="btn btn-info btn-lg" href="{{ url_article($article).'/edit' }}">Edit</a>
        @if($article->published)
            <a class="btn btn-danger btn-lg" href="{{ url_article($article).'/publish' }}"><i class="glyphicon glyphicon-remove"></i> Unpublish</a>
        @else
            <a class="btn btn-success btn-lg" href="{{ url_article($article).'/publish' }}"><i class="glyphicon glyphicon-check"></i> Publish</a>
        @endif
    </div>
@endif