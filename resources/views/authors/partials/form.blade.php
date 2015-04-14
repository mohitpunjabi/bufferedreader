<div>
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
    <label class="help-block">Name of the author</label>
    @if($errors->first('name')) <div class="alert alert-danger">{{ $errors->first('name') }}</div> @endif
</div>

<div>
    {!! Form::label('about', 'About the author') !!}
    {!! Form::textarea('about', null, ['class' => 'form-control', 'placeholder' => 'About the author', 'rows' => '2']) !!}
    <label class="help-block"></label>
    @if($errors->first('about')) <div class="alert alert-danger">{{ $errors->first('about') }}</div> @endif
</div>

<div>
    {!! Form::label('image', 'Author\'s image') !!}
    {!! Form::file('image', null, ['class' => 'form-control', 'placeholder' => 'Cover photo', 'accept' => 'image/*']) !!}
    <label class="help-block"></label>
    @if($errors->first('image')) <div class="alert alert-danger">{{ $errors->first('image') }}</div> @endif
</div>

<div>
    <button class="btn btn-block btn-primary" type="submit">{{ $buttonText }}</button>
</div>