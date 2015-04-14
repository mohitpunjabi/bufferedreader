<ul class="media-list">
    @foreach($authors as $author)
        <li class="media" itemprop="author">
            <div itemscope itemtype="http://schema.org/Person">
                <div class="pull-right">
                    @include('authors.partials.admin_tools', ['author' => $author])
                </div>
                <div class="media-left">
                    <img src="{{ asset('/img/'.$author->image) }}" itemprop="image" class="media-object pull-left" title="{{ $author->name }}">
                </div>
                <div class="media-body">
                    <h3 class="media-heading" itemprop="name">{{ $author->name }}</h3>
                    <p class="media-heading" itemprop="description">{{ $author->about }}</p>
                </div>
            </div>
        </li>
    @endforeach
</ul>