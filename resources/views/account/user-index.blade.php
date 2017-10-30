@extends('layouts.user')

@section('title', 'Show all posts')

@section('content')
    <h2> Welcome, {{ \Auth::user()->email }}</h2>
    <a href="{{ route('logout') }}">Sign out</a>
@endsection