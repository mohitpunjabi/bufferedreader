@if(Auth::user())
    <div class="text-center">
        <a class="btn btn-info btn-lg" href="{{ route('authors.edit', $author->id) }}">Edit</a>
    </div>
@endif