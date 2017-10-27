@extends('admin.admin-index')

@section('title', 'All posts')

@section('content')

    <table class="table table-hover">
        <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Content</th>
            <th style="with:260px">Action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($post as $p)

            <tr>
                <th scope="row">{{ $p->id }}</th>
                <td>{{ $p->title }}</td>
                <td>{{ $p->content }}</td>
                <td style="with:260px">
                    <a href="{{ URL::to('admin/admin-panel/' .$p->id) . '/edit' }}" class="btn btn-default" style="float: left; margin-right:10px">Edit</a>

                    {!! Form::open(['method' => 'DELETE', 'route' => ['admin-panel.destroy', $p->id]]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>

        @endforeach
        </tbody>
    </table>

    {{ $post->links() }}

@endsection