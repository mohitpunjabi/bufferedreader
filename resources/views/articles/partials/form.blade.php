<div>
    <button class="btn btn-block btn-primary" type="submit">{{ $buttonText }}</button>
</div>

<div>
    {!! Form::label('title', 'Title') !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title']) !!}
    <label class="help-block"></label>
    @if($errors->first('title')) <div class="alert alert-danger">{{ $errors->first('title') }}</div> @endif
</div>

<div>
    {!! Form::label('subtitle', 'Subtitle') !!}
    {!! Form::text('subtitle', null, ['class' => 'form-control', 'placeholder' => 'Subtitle - optional']) !!}
    <label class="help-block"></label>
    @if($errors->first('subtitle')) <div class="alert alert-danger">{{ $errors->first('subtitle') }}</div> @endif
</div>

<div>
    {!! Form::label('jumbotron_photo', 'Cover photo') !!}
    {!! Form::file('jumbotron_photo', null, ['class' => 'form-control', 'placeholder' => 'Cover photo', 'accept' => 'image/*']) !!}
    <label class="help-block">This is an (optional) cover photo for the article.</label>
    @if($errors->first('jumbotron_photo')) <div class="alert alert-danger">{{ $errors->first('jumbotron_photo') }}</div> @endif
</div>

<div>
    {!! Form::label('author_list', 'Authors') !!}
    {!! Form::select('author_list[]', $authors, null, ['class' => 'form-control', 'multiple' => 'multiple', 'id' => 'author_list']) !!}
    <label class="help-block">Authors of the article. If the authors aren't on the list, you can <a href="{{ url('/authors') }}" target="_blank">add them here.</a></label>
    @if($errors->first('authors')) <div class="alert alert-danger">{{ $errors->first('authors') }}</div> @endif
</div>

<div>
    {!! Form::label('short_description', 'Short description') !!}
    {!! Form::textarea('short_description', null, ['class' => 'form-control', 'placeholder' => 'A short description in 300 characters', 'rows' => 3]) !!}
    <label class="help-block">A short description for the article in 300 characters. Will be used as meta for search engines.</label>
    @if($errors->first('short_description')) <div class="alert alert-danger">{{ $errors->first('short_description') }}</div> @endif
</div>

<div>
    {!! Form::label('content', 'Content') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => 'Content', 'rows' => '40', 'style' => 'font-family: monospace']) !!}
    <label class="help-block"></label>
    @if($errors->first('content')) <div class="alert alert-danger">{{ $errors->first('content') }}</div> @endif
</div>

<div>
    <h3>Useful snippets</h3>
        <h4>Add an image</h4>
<pre>
{{
'
<a href="/img/path.jpg">
    <img itemprop="image"class="img-responsive center-block" src="/img/path.jpg" alt="Alternate text" title="Tooltip.">
</a>
<span class="caption text-muted">Caption of the image.</span>
'
}}
</pre>

        <h4>Add an image pulled right</h4>
<pre>
{{
'
<div class="col-lg-6 pull-right-lg">
    <a href="/img/6L4U8NnfLsl3CXn.jpg">
        <img itemprop="image"class="img-responsive" src="/img/path.jpg" alt="Alternate text" title="Tooltip.">
    </a>
    <span class="caption text-muted">Caption.</span>
</div>
'
}}
</pre>

        <h4>2 columns</h4>
<pre>
{{
'
<div class="row">
    <div class="col-lg-6">
        ...
    </div>
    <div class="col-lg-6">
        ...
    </div>
</div>
'
}}
</pre>

        <h4>Add a blockquote</h4>
<pre>
{{
'
<blockquote>
    The quote.
    <small>Author, if any</small>
</blockquote>
'
}}
</pre>

</div>

<div>
    <button class="btn btn-block btn-primary" type="submit">{{ $buttonText }}</button>
</div>