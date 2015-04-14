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
    {!! Form::select('author_list[]', $authors, null, ['class' => 'form-control', 'multiple' => 'multiple']) !!}
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
    {!! Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => 'Content', 'rows' => '60']) !!}
    <label class="help-block"></label>
    @if($errors->first('content')) <div class="alert alert-danger">{{ $errors->first('content') }}</div> @endif
</div>

<div>
    <button class="btn btn-block btn-primary" type="submit">{{ $buttonText }}</button>
</div>