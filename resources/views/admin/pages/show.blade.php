@extends('admin.admin-index')

@section('title', 'Show post')

@section('content')

    <h1>{{ $post->title }}</h1>
    <h1>{{ $post->content }}</h1>
    <h1>{{ Carbon\Carbon::parse($post->created_at)->format('d m Y') }}</h1>

    <a href="{{ URL::to('/admin/admin-panel/' . $post->id) . '/edit' }}" class="btn btn-default">Edit</a>

    {!! Form::open(['method' => 'DELETE', 'route' => ['admin-panel.destroy', $post->id]]) !!}
    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

    Show
@endsection