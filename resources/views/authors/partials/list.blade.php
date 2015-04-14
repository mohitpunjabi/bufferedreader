<ul class="media-list">
    @foreach($authors as $author)
        <li class="media">
            <div class="pull-right">
                @include('authors.partials.admin_tools', ['author' => $author])
            </div>
            <div class="media-left">
                <img src="{{ asset('/img/'.$author->image) }}" class="media-object img-responsive pull-left">
            </div>
            <div class="media-body">
                <h3 class="media-heading">{{ $author->name }}</h3>
                <p class="media-heading">{{ $author->about }}</p>
            </div>
        </li>
    @endforeach
</ul>