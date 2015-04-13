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
    {!! Form::label('content', 'Content') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => 'Content', 'rows' => '60']) !!}
    <label class="help-block"></label>
    @if($errors->first('content')) <div class="alert alert-danger">{{ $errors->first('content') }}</div> @endif
</div>

<div>
    <button class="btn btn-block btn-primary" type="submit">{{ $buttonText }}</button>
</div>