@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">Create an article</h1>
                {!! Form::open(['route' => 'articles.store']) !!}

                <div class="form-group">
                    {!! Form::label('issue_id', 'Issue') !!}
                    {!! Form::select('issue_id', $issues, ['class' => 'form-control ', 'placeholder' => 'Issue']) !!}
                    <label class="help-block"></label>
                    @if($errors->first('issue_id')) <div class="alert alert-danger">{{ $errors->first('issue_id') }}</div> @endif
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
                    {!! Form::label('content', 'Content') !!}
                    {!! Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => 'Content']) !!}
                    <label class="help-block"></label>
                    @if($errors->first('content')) <div class="alert alert-danger">{{ $errors->first('content') }}</div> @endif
                </div>

                <div>
                    <button class="btn btn-block btn-primary" type="submit">Create</button>
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop