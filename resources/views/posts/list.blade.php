
@extends('home')
@section('title', 'My Blog')
@section('content')

    <a class="navbar-brand">My Blog</a>

    <p>
        <a href="{{route('posts.create')}}" class="btn btn-primary">Create new post</a>
    </p>
    <form class="form-inline" action="{{ route('posts.search') }}" method="get">
        <div class="form-group mx-sm-3 mb-2">
            <label for="inputPassword2" class="sr-only">Title</label>
            <input type="text" class="form-control" name="keyword" placeholder="Title">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Tìm kiếm</button>
    </form>
    <ul>

        <?php foreach ($posts as $post): ?>
        <li>
            <h2><a href="{{route('posts.view', $post->id)}}">{{ $post->title }}</a></h2>
            <span>{{ $post->created }}</span>
            <p>{{ $post->teaser }}</p>
            <a href="{{route('posts.edit', $post->id)}}" class="btn btn-primary btn-sm">Update</a>
            <a href="{{route('posts.destroy', $post->id)}}" class="btn btn-warning btn-sm" onclick="return confirm('Bạn chắc chắn muốn xóa?')">Delete</a>

        </li>
        <?php endforeach; ?>
    </ul>
    <div class="col-6">
        <div class="pagination float-right">
            {{ $posts->appends(request()->query()) }}
        </div>
    </div>

@endsection