@extends('home')
@section('title', 'Create new post')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Create new post</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{route('posts.store')}}">
                    @csrf
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label>Teaser</label>
                        <textarea name="teaser" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea name="content" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Created</label>
                        <input type="date" name="created" class="form-control"/>
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection