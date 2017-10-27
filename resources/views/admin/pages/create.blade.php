@extends('admin.admin-index')

@section('title', 'Add post')

@section('content')

    <div class="col-md-9">
        {!! Form::open(['route' => 'admin-panel.store']) !!}
        <div class="form-group">
            <div class="col-md-3">
                {{ Form::label('title', 'Header') }}
            </div>
            <div class="col-md-9">
                {{ Form::text('title', null, ['class' => 'form-control']) }}
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-3">
                {{ Form::label('content', 'Post text') }}
            </div>
            <div class="col-md-9">
                {{ Form::textarea('content', null, ['class' => 'form-control']) }}
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-9 col-md-offset-3">
                {{ Form::submit('Add', ['class' => 'btn btn-primary']) }}
            </div>
        </div>

        {!! Form::close() !!}

    </div>

@endsection