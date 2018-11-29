
@extends('home')
@section('title', 'My Blog')
@section('content')

    <a class="navbar-brand">My Blog</a>
    <p>
        <a href="{{route('posts.index')}}" class="btn btn-default">Return to posts</a>
    </p>

    <h1>{{ $posts->title }}</h1>
    <p>{{ $posts->created }}</p>
    <p>{{ $posts->teaser }}</p>
    <p>{{ $posts->content }}</p>

@endsection
