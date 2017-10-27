@extends('admin.admin-index')

@section('title', 'Edit post')

@section('content')

    <div class="col-md-7">

        {{--{!!  Form::model($post, ['route' => ['admin-panel.update', $post], 'method'=>'PUT']) !!}--}}
        {{--{!! Form::model($post, array('route' => array('admin-panel.update', $post->id))) !!}--}}
        {!! Form::model($post, array('route' => array('admin-panel.update', $post->id), 'method' => 'PUT')) !!}

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
                {{ Form::submit('Edit', ['class' => 'btn btn-primary']) }}
            </div>
        </div>

        {!! Form::close() !!}
    </div>

@endsection