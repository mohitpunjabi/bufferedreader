<div class="row">
    <div class="col-md-10">
        <div>
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name', 'required' => 'required']) !!}
            @if($errors->first('name')) <div class="alert alert-danger">{{ $errors->first('name') }}</div> @endif
        </div>
        <br/>
        <div>
            {!! Form::textarea('about', null, ['class' => 'form-control', 'placeholder' => 'About the author', 'rows' => '2', 'required' => 'required']) !!}
            @if($errors->first('about')) <div class="alert alert-danger">{{ $errors->first('about') }}</div> @endif
        </div>
        <br/>
        <div>
            {!! Form::file('image', ['accept' => 'image/*') !!}
            @if($errors->first('image')) <div class="alert alert-danger">{{ $errors->first('image') }}</div> @endif
        </div>
    </div>

    <div class="col-md-2">
        <button class="btn btn-block btn-primary" type="submit">{{ $buttonText }}</button>
    </div>
</div>