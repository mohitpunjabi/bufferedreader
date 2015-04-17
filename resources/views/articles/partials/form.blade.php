<div class="row">
    <div class="col-md-6">
        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title', 'required' => 'required']) !!}
        <label class="help-block"></label>
        @if($errors->first('title')) <div class="alert alert-danger">{{ $errors->first('title') }}</div> @endif
    </div>

    <div class="col-md-6">
        {!! Form::label('subtitle', 'Subtitle') !!}
        {!! Form::text('subtitle', null, ['class' => 'form-control', 'placeholder' => 'Subtitle - optional']) !!}
        <label class="help-block"></label>
        @if($errors->first('subtitle')) <div class="alert alert-danger">{{ $errors->first('subtitle') }}</div> @endif
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div>

        </div>
            {!! Form::label('jumbotron_photo', 'Cover photo') !!}
            {!! Form::file('jumbotron_photo', null, ['class' => 'form-control', 'placeholder' => 'Cover photo', 'accept' => 'image/*']) !!}
            <label class="help-block small">This is an (optional) cover photo for the article.</label>
            @if($errors->first('jumbotron_photo')) <div class="alert alert-danger">{{ $errors->first('jumbotron_photo') }}</div> @endif
        <div>
            {!! Form::label('author_list', 'Authors') !!}
            {!! Form::select('author_list[]', $authors, null, ['class' => 'form-control', 'multiple' => 'multiple', 'id' => 'author_list']) !!}
            <label class="help-block small"><a href="{{ url('/authors') }}" target="_blank">+ Add new authors</a></label>
            @if($errors->first('authors')) <div class="alert alert-danger">{{ $errors->first('authors') }}</div> @endif
        </div>
    </div>

    <div class="col-md-6">
        {!! Form::label('short_description', 'Short description') !!}
        {!! Form::textarea('short_description', null, ['class' => 'form-control', 'placeholder' => 'A short description in 300 characters', 'rows' => 5, 'required' => 'required']) !!}
        <label class="help-block small">A short description for the article in 300 characters. Will be used as meta for search engines.</label>
        @if($errors->first('short_description')) <div class="alert alert-danger">{{ $errors->first('short_description') }}</div> @endif
    </div>
</div>

<div>
    {!! Form::label('content', 'Content') !!}

    <div id="editorToolbar" class="btn-toolbar" role="toolbar" aria-label="...">
        <div class="btn-group" role="group" aria-label="group">
            <button type="button" class="btn btn-default btn-sm" for="image">
                <span class="glyphicon glyphicon-picture"></span> Image
            </button>

            <button type="button" class="btn btn-default btn-sm" for="blockquote">
                <span class="glyphicon glyphicon-user"></span> Blockquote
            </button>

            <button type="button" class="btn btn-default btn-sm" for="imageRight">
                <span class="glyphicon glyphicon-align-right"></span> <span class="glyphicon glyphicon-picture"></span> Image pulled right
            </button>
            <button type="button" class="btn btn-default btn-sm" for="twoCols">
                <span class="glyphicon glyphicon-align-left"></span> <span class="glyphicon glyphicon-align-left"></span> 2 columns
            </button>
        </div>
    </div>


    {!! Form::textarea('content', null, ['id' => 'content', 'class' => 'form-control', 'placeholder' => 'Content', 'rows' => '30', 'style' => 'font-family: monospace', 'required' => 'required']) !!}
    <label class="help-block small"></label>
    @if($errors->first('content')) <div class="alert alert-danger">{{ $errors->first('content') }}</div> @endif
</div>

<div>
    <button class="btn btn-block btn-primary" type="submit">{{ $buttonText }}</button>
</div>



<div id="templates" class="hidden">

    <div id="image">
<a href="[PATH]">
    <img itemprop="image"class="img-responsive center-block" src="[PATH]" alt="[ALT TEXT]" title="[TOOLTIP]">
</a>
<span class="caption text-muted">[CAPTION]</span>
    </div>

    <div id="imageRight">
<div class="col-lg-6 pull-right-lg">
    <a href="[PATH]">
        <img itemprop="image"class="img-responsive center-block" src="[PATH]" alt="[ALT TEXT]" title="[TOOLTIP]">
    </a>
    <span class="caption text-muted">[CAPTION]</span>
</div>
    </div>

    <div id="twoCols">
<div class="row">
    <div class="col-lg-6">
        ...
    </div>
    <div class="col-lg-6">
        ...
    </div>
</div>
    </div>

    <div id="blockquote">
<blockquote>
    [QUOTE]
    <small>[AUTHOR]</small>
</blockquote>
    </div>
</div>